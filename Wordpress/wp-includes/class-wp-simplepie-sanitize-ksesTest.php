<?php

namespace tests;

use Mockery as m;
use WP_SimplePie_Sanitize_KSES;

class WP_SimplePie_Sanitize_KSESTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \WP_SimplePie_Sanitize_KSES
*/
protected $wP_SimplePie_Sanitize_KSES;

public function setUp()
{
    parent::setUp();

    $this->wP_SimplePie_Sanitize_KSES = new \WP_SimplePie_Sanitize_KSES();
}

public function testSanitize0()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == false (line 37)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == false (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == false (line 47)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize1()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == false (line 37)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == false (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == true (line 47)
    // if ($this->output_encoding !== 'UTF-8') == false (line 49)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize2()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == false (line 37)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == false (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == true (line 47)
    // if ($this->output_encoding !== 'UTF-8') == true (line 49)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize3()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == false (line 37)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == true (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == false (line 47)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize4()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == false (line 37)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == true (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == true (line 47)
    // if ($this->output_encoding !== 'UTF-8') == false (line 49)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize5()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == false (line 37)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == true (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == true (line 47)
    // if ($this->output_encoding !== 'UTF-8') == true (line 49)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize6()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == true (line 37)
    // if (\preg_match('/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\\/[A-Za-z][^\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\x2F\\x3E]*' . \SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $data)) == false (line 38)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == false (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == false (line 47)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize7()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == true (line 37)
    // if (\preg_match('/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\\/[A-Za-z][^\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\x2F\\x3E]*' . \SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $data)) == false (line 38)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == false (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == true (line 47)
    // if ($this->output_encoding !== 'UTF-8') == false (line 49)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize8()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == true (line 37)
    // if (\preg_match('/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\\/[A-Za-z][^\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\x2F\\x3E]*' . \SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $data)) == false (line 38)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == false (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == true (line 47)
    // if ($this->output_encoding !== 'UTF-8') == true (line 49)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize9()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == true (line 37)
    // if (\preg_match('/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\\/[A-Za-z][^\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\x2F\\x3E]*' . \SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $data)) == false (line 38)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == true (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == false (line 47)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize10()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == true (line 37)
    // if (\preg_match('/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\\/[A-Za-z][^\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\x2F\\x3E]*' . \SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $data)) == false (line 38)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == true (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == true (line 47)
    // if ($this->output_encoding !== 'UTF-8') == false (line 49)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize11()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == true (line 37)
    // if (\preg_match('/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\\/[A-Za-z][^\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\x2F\\x3E]*' . \SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $data)) == false (line 38)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == true (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == true (line 47)
    // if ($this->output_encoding !== 'UTF-8') == true (line 49)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize12()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == true (line 37)
    // if (\preg_match('/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\\/[A-Za-z][^\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\x2F\\x3E]*' . \SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $data)) == true (line 38)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == false (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == false (line 47)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize13()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == true (line 37)
    // if (\preg_match('/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\\/[A-Za-z][^\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\x2F\\x3E]*' . \SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $data)) == true (line 38)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == false (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == true (line 47)
    // if ($this->output_encoding !== 'UTF-8') == false (line 49)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize14()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == true (line 37)
    // if (\preg_match('/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\\/[A-Za-z][^\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\x2F\\x3E]*' . \SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $data)) == true (line 38)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == false (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == true (line 47)
    // if ($this->output_encoding !== 'UTF-8') == true (line 49)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize15()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == true (line 37)
    // if (\preg_match('/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\\/[A-Za-z][^\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\x2F\\x3E]*' . \SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $data)) == true (line 38)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == true (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == false (line 47)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize16()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == true (line 37)
    // if (\preg_match('/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\\/[A-Za-z][^\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\x2F\\x3E]*' . \SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $data)) == true (line 38)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == true (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == true (line 47)
    // if ($this->output_encoding !== 'UTF-8') == false (line 49)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSanitize17()
{
    $data = m::mock('UntypedParameter_data_');
    $type = m::mock('UntypedParameter_type_');
    $base = m::mock('UntypedParameter_base_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($type & \SIMPLEPIE_CONSTRUCT_MAYBE_HTML) == true (line 37)
    // if (\preg_match('/(&(#(x[0-9a-fA-F]+|[0-9]+)|[a-zA-Z0-9]+)|<\\/[A-Za-z][^\\x09\\x0A\\x0B\\x0C\\x0D\\x20\\x2F\\x3E]*' . \SIMPLEPIE_PCRE_HTML_ATTRIBUTE . '>)/', $data)) == true (line 38)
    // if ($type & \SIMPLEPIE_CONSTRUCT_BASE64) == true (line 44)
    // if ($type & (\SIMPLEPIE_CONSTRUCT_HTML | \SIMPLEPIE_CONSTRUCT_XHTML)) == true (line 47)
    // if ($this->output_encoding !== 'UTF-8') == true (line 49)

    $actual = $this->wP_SimplePie_Sanitize_KSES->sanitize($data, $type, $base);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
