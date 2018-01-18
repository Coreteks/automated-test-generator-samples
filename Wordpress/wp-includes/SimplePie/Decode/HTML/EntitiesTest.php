<?php

namespace tests;

use Mockery as m;
use SimplePie_Decode_HTML_Entities;

class SimplePie_Decode_HTML_EntitiesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_data = null;
/**
* @var \SimplePie_Decode_HTML_Entities
*/
protected $simplePie_Decode_HTML_Entities;

public function setUp()
{
    parent::setUp();

    $this->_data = null;
    $this->simplePie_Decode_HTML_Entities = new \SimplePie_Decode_HTML_Entities($this->_data);
}

public function testParse0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (($this->position = \strpos($this->data, '&', $this->position)) !== \false) == false (line 99)

    $actual = $this->simplePie_Decode_HTML_Entities->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testParse1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // while (($this->position = \strpos($this->data, '&', $this->position)) !== \false) == true (line 99)
    // while (($this->position = \strpos($this->data, '&', $this->position)) !== \false) == false (line 99)

    $actual = $this->simplePie_Decode_HTML_Entities->parse();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConsume0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data[$this->position])) == false (line 116)

    $actual = $this->simplePie_Decode_HTML_Entities->consume();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConsume1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data[$this->position])) == true (line 116)

    $actual = $this->simplePie_Decode_HTML_Entities->consume();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConsume_range0()
{
    $chars = m::mock('UntypedParameter_chars_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($len = \strspn($this->data, $chars, $this->position)) == false (line 136)

    $actual = $this->simplePie_Decode_HTML_Entities->consume_range($chars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConsume_range1()
{
    $chars = m::mock('UntypedParameter_chars_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($len = \strspn($this->data, $chars, $this->position)) == true (line 136)

    $actual = $this->simplePie_Decode_HTML_Entities->consume_range($chars);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnconsume0()
{
    // TODO: Your mock expectations here

    $actual = $this->simplePie_Decode_HTML_Entities->unconsume();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == false (line 180)
    // Default (line 229)
    // for (...) == false (line 599)
    // if ($match !== \null) == false (line 608)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == false (line 180)
    // Default (line 229)
    // for (...) == false (line 599)
    // if ($match !== \null) == true (line 608)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == false (line 180)
    // Default (line 229)
    // for (...) == true (line 599)
    // if (isset($entities[$consumed])) == false (line 602)
    // for (...) == false (line 599)
    // if ($match !== \null) == false (line 608)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == false (line 180)
    // Default (line 229)
    // for (...) == true (line 599)
    // if (isset($entities[$consumed])) == false (line 602)
    // for (...) == false (line 599)
    // if ($match !== \null) == true (line 608)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == false (line 180)
    // Default (line 229)
    // for (...) == true (line 599)
    // if (isset($entities[$consumed])) == true (line 602)
    // for (...) == false (line 599)
    // if ($match !== \null) == false (line 608)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == false (line 180)
    // Default (line 229)
    // for (...) == true (line 599)
    // if (isset($entities[$consumed])) == true (line 602)
    // for (...) == false (line 599)
    // if ($match !== \null) == true (line 608)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == false (line 184)
    // Default (line 189)
    // if ($codepoint = $this->consume_range($range)) == false (line 196)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == false (line 184)
    // Default (line 189)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == false (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == false (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == false (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == false (line 184)
    // Default (line 189)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == false (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == false (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == true (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == false (line 184)
    // Default (line 189)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == false (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == true (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == false (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == false (line 184)
    // Default (line 189)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == false (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == true (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == true (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == false (line 184)
    // Default (line 189)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == true (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == false (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == false (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity12()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == false (line 184)
    // Default (line 189)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == true (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == false (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == true (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity13()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == false (line 184)
    // Default (line 189)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == true (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == true (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == false (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity14()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == false (line 184)
    // Default (line 189)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == true (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == true (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == true (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity15()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == true (line 184)
    // if ($codepoint = $this->consume_range($range)) == false (line 196)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity16()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == true (line 184)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == false (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == false (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == false (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity17()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == true (line 184)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == false (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == false (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == true (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity18()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == true (line 184)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == false (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == true (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == false (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity19()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == true (line 184)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == false (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == true (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == true (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity20()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == true (line 184)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == true (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == false (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == false (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity21()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == true (line 184)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == true (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == false (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == true (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity22()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == true (line 184)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == true (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == true (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == false (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity23()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == false (line 183)
    // Case "X" == true (line 184)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == true (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == true (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == true (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity24()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == true (line 183)
    // if ($codepoint = $this->consume_range($range)) == false (line 196)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity25()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == true (line 183)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == false (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == false (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == false (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity26()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == true (line 183)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == false (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == false (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == true (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity27()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == true (line 183)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == false (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == true (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == false (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity28()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == true (line 183)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == false (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == true (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == true (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity29()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == true (line 183)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == true (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == false (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == false (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity30()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == true (line 183)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == true (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == false (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == true (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity31()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == true (line 183)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == true (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == true (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == false (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity32()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == false (line 177)
    // Case "#" == true (line 180)
    // switch ($this->consume()) (line 181)
    // Case "x" == true (line 183)
    // if ($codepoint = $this->consume_range($range)) == true (line 196)
    // if ($hex) == true (line 200)
    // if (isset($windows_1252_specials[$codepoint])) == true (line 209)
    // if (!\in_array($this->consume(), array(';', \false), \true)) == true (line 218)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity33()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == false (line 176)
    // Case \false == true (line 177)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity34()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == false (line 175)
    // Case "&" == true (line 176)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity35()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == false (line 174)
    // Case "<" == true (line 175)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity36()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == false (line 173)
    // Case " " == true (line 174)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity37()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == false (line 172)
    // Case "\f" == true (line 173)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity38()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == false (line 171)
    // Case "\v" == true (line 172)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity39()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == false (line 170)
    // Case "\v" == true (line 171)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity40()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == false (line 169)
    // Case "\n" == true (line 170)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEntity41()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($this->consume()) (line 167)
    // Case "\t" == true (line 169)

    $actual = $this->simplePie_Decode_HTML_Entities->entity();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
