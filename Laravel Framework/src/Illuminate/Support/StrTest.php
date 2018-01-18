<?php

namespace tests\Illuminate\Support;

use Illuminate\Support\Str;
use Mockery as m;

class StrTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Illuminate\Support\Str
*/
protected $str;

public function setUp()
{
    parent::setUp();

    $this->str = new \Illuminate\Support\Str();
}

public function testAfter0()
{
    $subject = m::mock('UntypedParameter_subject_');
    $search = m::mock('UntypedParameter_search_');

    // TODO: Your mock expectations here

    $actual = $this->str->after($subject, $search);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAscii0()
{
    $value = m::mock('UntypedParameter_value_');
    $language = m::mock('UntypedParameter_language_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($languageSpecific)) == false (line 55)

    $actual = $this->str->ascii($value, $language);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAscii1()
{
    $value = m::mock('UntypedParameter_value_');
    $language = m::mock('UntypedParameter_language_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($languageSpecific)) == false (line 55)

    $actual = $this->str->ascii($value, $language);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAscii2()
{
    $value = m::mock('UntypedParameter_value_');
    $language = m::mock('UntypedParameter_language_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($languageSpecific)) == true (line 55)

    $actual = $this->str->ascii($value, $language);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAscii3()
{
    $value = m::mock('UntypedParameter_value_');
    $language = m::mock('UntypedParameter_language_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($languageSpecific)) == true (line 55)

    $actual = $this->str->ascii($value, $language);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore0()
{
    $subject = m::mock('UntypedParameter_subject_');
    $search = m::mock('UntypedParameter_search_');

    // TODO: Your mock expectations here

    $actual = $this->str->before($subject, $search);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCamel0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset(static::$camelCache[$value])) == false (line 86)

    $actual = $this->str->camel($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCamel1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset(static::$camelCache[$value])) == true (line 86)

    $actual = $this->str->camel($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContains0()
{
    $haystack = m::mock('UntypedParameter_haystack_');
    $needles = m::mock('UntypedParameter_needles_');

    // TODO: Your mock expectations here

    $actual = $this->str->contains($haystack, $needles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContains1()
{
    $haystack = m::mock('UntypedParameter_haystack_');
    $needles = m::mock('UntypedParameter_needles_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($needle !== '' && mb_strpos($haystack, $needle) !== false) == false (line 103)

    $actual = $this->str->contains($haystack, $needles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testContains2()
{
    $haystack = m::mock('UntypedParameter_haystack_');
    $needles = m::mock('UntypedParameter_needles_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($needle !== '' && mb_strpos($haystack, $needle) !== false) == true (line 103)

    $actual = $this->str->contains($haystack, $needles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndsWith0()
{
    $haystack = m::mock('UntypedParameter_haystack_');
    $needles = m::mock('UntypedParameter_needles_');

    // TODO: Your mock expectations here

    $actual = $this->str->endsWith($haystack, $needles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndsWith1()
{
    $haystack = m::mock('UntypedParameter_haystack_');
    $needles = m::mock('UntypedParameter_needles_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr($haystack, -strlen($needle)) === (string) $needle) == false (line 121)

    $actual = $this->str->endsWith($haystack, $needles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEndsWith2()
{
    $haystack = m::mock('UntypedParameter_haystack_');
    $needles = m::mock('UntypedParameter_needles_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (substr($haystack, -strlen($needle)) === (string) $needle) == true (line 121)

    $actual = $this->str->endsWith($haystack, $needles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFinish0()
{
    $value = m::mock('UntypedParameter_value_');
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    $actual = $this->str->finish($value, $cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs0()
{
    $pattern = m::mock('UntypedParameter_pattern_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($patterns)) == false (line 154)

    $actual = $this->str->is($pattern, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs1()
{
    $pattern = m::mock('UntypedParameter_pattern_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($patterns)) == false (line 154)
    // if ($pattern == $value) == false (line 162)
    // if (preg_match('#^' . $pattern . '\\z#u', $value) === 1) == false (line 173)

    $actual = $this->str->is($pattern, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs2()
{
    $pattern = m::mock('UntypedParameter_pattern_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($patterns)) == false (line 154)
    // if ($pattern == $value) == false (line 162)
    // if (preg_match('#^' . $pattern . '\\z#u', $value) === 1) == true (line 173)

    $actual = $this->str->is($pattern, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs3()
{
    $pattern = m::mock('UntypedParameter_pattern_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($patterns)) == false (line 154)
    // if ($pattern == $value) == true (line 162)

    $actual = $this->str->is($pattern, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs4()
{
    $pattern = m::mock('UntypedParameter_pattern_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($patterns)) == true (line 154)

    $actual = $this->str->is($pattern, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKebab0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->str->kebab($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLength0()
{
    $value = m::mock('UntypedParameter_value_');
    $encoding = m::mock('UntypedParameter_encoding_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encoding) == false (line 201)

    $actual = $this->str->length($value, $encoding);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLength1()
{
    $value = m::mock('UntypedParameter_value_');
    $encoding = m::mock('UntypedParameter_encoding_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($encoding) == true (line 201)

    $actual = $this->str->length($value, $encoding);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLimit0()
{
    $value = m::mock('UntypedParameter_value_');
    $limit = m::mock('UntypedParameter_limit_');
    $end = m::mock('UntypedParameter_end_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (mb_strwidth($value, 'UTF-8') <= $limit) == false (line 218)

    $actual = $this->str->limit($value, $limit, $end);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLimit1()
{
    $value = m::mock('UntypedParameter_value_');
    $limit = m::mock('UntypedParameter_limit_');
    $end = m::mock('UntypedParameter_end_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (mb_strwidth($value, 'UTF-8') <= $limit) == true (line 218)

    $actual = $this->str->limit($value, $limit, $end);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLower0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->str->lower($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWords0()
{
    $value = m::mock('UntypedParameter_value_');
    $words = m::mock('UntypedParameter_words_');
    $end = m::mock('UntypedParameter_end_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($matches[0]) || static::length($value) === static::length($matches[0])) == false (line 248)

    $actual = $this->str->words($value, $words, $end);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWords1()
{
    $value = m::mock('UntypedParameter_value_');
    $words = m::mock('UntypedParameter_words_');
    $end = m::mock('UntypedParameter_end_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($matches[0]) || static::length($value) === static::length($matches[0])) == true (line 248)

    $actual = $this->str->words($value, $words, $end);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParseCallback0()
{
    $callback = m::mock('UntypedParameter_callback_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->str->parseCallback($callback, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPlural0()
{
    $value = m::mock('UntypedParameter_value_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    $actual = $this->str->plural($value, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandom0()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (($len = strlen($string)) < $length) == false (line 289)

    $actual = $this->str->random($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRandom1()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // while (($len = strlen($string)) < $length) == true (line 289)
    // while (($len = strlen($string)) < $length) == false (line 289)

    $actual = $this->str->random($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplaceArray0()
{
    $search = m::mock('UntypedParameter_search_');
    $replace = [];
    $subject = m::mock('UntypedParameter_subject_');

    // TODO: Your mock expectations here

    $actual = $this->str->replaceArray($search, $replace, $subject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplaceArray1()
{
    $search = m::mock('UntypedParameter_search_');
    $replace = [];
    $subject = m::mock('UntypedParameter_subject_');

    // TODO: Your mock expectations here

    $actual = $this->str->replaceArray($search, $replace, $subject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplaceFirst0()
{
    $search = m::mock('UntypedParameter_search_');
    $replace = m::mock('UntypedParameter_replace_');
    $subject = m::mock('UntypedParameter_subject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($search == '') == false (line 327)
    // if ($position !== false) == false (line 333)

    $actual = $this->str->replaceFirst($search, $replace, $subject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplaceFirst1()
{
    $search = m::mock('UntypedParameter_search_');
    $replace = m::mock('UntypedParameter_replace_');
    $subject = m::mock('UntypedParameter_subject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($search == '') == false (line 327)
    // if ($position !== false) == true (line 333)

    $actual = $this->str->replaceFirst($search, $replace, $subject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplaceFirst2()
{
    $search = m::mock('UntypedParameter_search_');
    $replace = m::mock('UntypedParameter_replace_');
    $subject = m::mock('UntypedParameter_subject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($search == '') == true (line 327)

    $actual = $this->str->replaceFirst($search, $replace, $subject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplaceLast0()
{
    $search = m::mock('UntypedParameter_search_');
    $replace = m::mock('UntypedParameter_replace_');
    $subject = m::mock('UntypedParameter_subject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($position !== false) == false (line 352)

    $actual = $this->str->replaceLast($search, $replace, $subject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplaceLast1()
{
    $search = m::mock('UntypedParameter_search_');
    $replace = m::mock('UntypedParameter_replace_');
    $subject = m::mock('UntypedParameter_subject_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($position !== false) == true (line 352)

    $actual = $this->str->replaceLast($search, $replace, $subject);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart0()
{
    $value = m::mock('UntypedParameter_value_');
    $prefix = m::mock('UntypedParameter_prefix_');

    // TODO: Your mock expectations here

    $actual = $this->str->start($value, $prefix);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUpper0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->str->upper($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTitle0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->str->title($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSingular0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->str->singular($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSlug0()
{
    $title = m::mock('UntypedParameter_title_');
    $separator = m::mock('UntypedParameter_separator_');
    $language = m::mock('UntypedParameter_language_');

    // TODO: Your mock expectations here

    $actual = $this->str->slug($title, $separator, $language);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSnake0()
{
    $value = m::mock('UntypedParameter_value_');
    $delimiter = m::mock('UntypedParameter_delimiter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset(static::$snakeCache[$key][$delimiter])) == false (line 446)
    // if (!ctype_lower($value)) == false (line 450)

    $actual = $this->str->snake($value, $delimiter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSnake1()
{
    $value = m::mock('UntypedParameter_value_');
    $delimiter = m::mock('UntypedParameter_delimiter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset(static::$snakeCache[$key][$delimiter])) == false (line 446)
    // if (!ctype_lower($value)) == true (line 450)

    $actual = $this->str->snake($value, $delimiter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSnake2()
{
    $value = m::mock('UntypedParameter_value_');
    $delimiter = m::mock('UntypedParameter_delimiter_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset(static::$snakeCache[$key][$delimiter])) == true (line 446)

    $actual = $this->str->snake($value, $delimiter);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartsWith0()
{
    $haystack = m::mock('UntypedParameter_haystack_');
    $needles = m::mock('UntypedParameter_needles_');

    // TODO: Your mock expectations here

    $actual = $this->str->startsWith($haystack, $needles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartsWith1()
{
    $haystack = m::mock('UntypedParameter_haystack_');
    $needles = m::mock('UntypedParameter_needles_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($needle !== '' && substr($haystack, 0, strlen($needle)) === (string) $needle) == false (line 469)

    $actual = $this->str->startsWith($haystack, $needles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartsWith2()
{
    $haystack = m::mock('UntypedParameter_haystack_');
    $needles = m::mock('UntypedParameter_needles_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($needle !== '' && substr($haystack, 0, strlen($needle)) === (string) $needle) == true (line 469)

    $actual = $this->str->startsWith($haystack, $needles);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStudly0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset(static::$studlyCache[$key])) == false (line 487)

    $actual = $this->str->studly($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStudly1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset(static::$studlyCache[$key])) == true (line 487)

    $actual = $this->str->studly($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubstr0()
{
    $string = m::mock('UntypedParameter_string_');
    $start = m::mock('UntypedParameter_start_');
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    $actual = $this->str->substr($string, $start, $length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUcfirst0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->str->ucfirst($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
