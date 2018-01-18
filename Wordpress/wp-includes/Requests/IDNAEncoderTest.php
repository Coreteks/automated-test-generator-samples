<?php

namespace tests;

use Mockery as m;
use Requests_IDNAEncoder;

class Requests_IDNAEncoderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_IDNAEncoder
*/
protected $requests_IDNAEncoder;

public function setUp()
{
    parent::setUp();

    $this->requests_IDNAEncoder = new \Requests_IDNAEncoder();
}

public function testEncode0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->requests_IDNAEncoder->encode($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEncode1()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    $actual = $this->requests_IDNAEncoder->encode($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Requests_Exception
 */
public function testTo_ascii0()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::is_ascii($string)) == false (line 64)
    // if (self::is_ascii($string)) == false (line 78)
    // if (\strpos($string, self::ACE_PREFIX) === 0) == false (line 88)
    // if (\strlen($string) < 64) == false (line 99)
    // throw new \Requests_Exception('Encoded string is too long', 'idna.encoded_too_long', $string) -> exception (line 103)

    $actual = $this->requests_IDNAEncoder->to_ascii($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_ascii1()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::is_ascii($string)) == false (line 64)
    // if (self::is_ascii($string)) == false (line 78)
    // if (\strpos($string, self::ACE_PREFIX) === 0) == false (line 88)
    // if (\strlen($string) < 64) == true (line 99)

    $actual = $this->requests_IDNAEncoder->to_ascii($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Requests_Exception
 */
public function testTo_ascii2()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::is_ascii($string)) == false (line 64)
    // if (self::is_ascii($string)) == false (line 78)
    // if (\strpos($string, self::ACE_PREFIX) === 0) == true (line 88)
    // throw new \Requests_Exception('Provided string begins with ACE prefix', 'idna.provided_is_prefixed', $string) -> exception (line 89)

    $actual = $this->requests_IDNAEncoder->to_ascii($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Requests_Exception
 */
public function testTo_ascii3()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::is_ascii($string)) == false (line 64)
    // if (self::is_ascii($string)) == true (line 78)
    // if (\strlen($string) < 64) == false (line 80)
    // throw new \Requests_Exception('Prepared string is too long', 'idna.prepared_too_long', $string) -> exception (line 84)

    $actual = $this->requests_IDNAEncoder->to_ascii($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_ascii4()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::is_ascii($string)) == false (line 64)
    // if (self::is_ascii($string)) == true (line 78)
    // if (\strlen($string) < 64) == true (line 80)

    $actual = $this->requests_IDNAEncoder->to_ascii($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Requests_Exception
 */
public function testTo_ascii5()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::is_ascii($string)) == true (line 64)
    // if (\strlen($string) < 64) == false (line 66)
    // throw new \Requests_Exception('Provided string is too long', 'idna.provided_too_long', $string) -> exception (line 70)

    $actual = $this->requests_IDNAEncoder->to_ascii($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTo_ascii6()
{
    $string = m::mock('UntypedParameter_string_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::is_ascii($string)) == true (line 64)
    // if (\strlen($string) < 64) == true (line 66)

    $actual = $this->requests_IDNAEncoder->to_ascii($string);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode0()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode1()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode2()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == false (line 285)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode3()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode4()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == false (line 295)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode5()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == false (line 295)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode6()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == true (line 295)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode7()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == true (line 295)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode8()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == true (line 292)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode9()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == true (line 292)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode10()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == true (line 281)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode11()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode12()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode13()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == false (line 285)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode14()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode15()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == false (line 295)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode16()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == false (line 295)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode17()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == true (line 295)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode18()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == true (line 295)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode19()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == true (line 292)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode20()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == true (line 292)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode21()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == true (line 281)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode22()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode23()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode24()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == false (line 285)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode25()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode26()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == false (line 295)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode27()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == false (line 295)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode28()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == true (line 295)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode29()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == true (line 295)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode30()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == true (line 292)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode31()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == true (line 292)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode32()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == true (line 281)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode33()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode34()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode35()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == false (line 285)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode36()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode37()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == false (line 295)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode38()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == false (line 295)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode39()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == true (line 295)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode40()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == true (line 295)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode41()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == true (line 292)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode42()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == true (line 292)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode43()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == false (line 252)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == true (line 281)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Requests_Exception
 */
public function testPunycode_encode44()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == false (line 243)
    // if ($char < $n) == true (line 252)
    // throw new \Requests_Exception('Invalid character', 'idna.character_outside_domain', $char) -> exception (line 253)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode45()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode46()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode47()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == false (line 285)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode48()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode49()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == false (line 295)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode50()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == false (line 295)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode51()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == true (line 295)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode52()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == true (line 295)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode53()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == true (line 292)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode54()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == true (line 292)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode55()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == false (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == true (line 281)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode56()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode57()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode58()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == false (line 285)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode59()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode60()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == false (line 295)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode61()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == false (line 295)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode62()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == true (line 295)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode63()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == false (line 292)
    // if ($k >= $bias + self::BOOTSTRAP_TMAX) == true (line 295)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode64()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == true (line 292)
    // if ($q < $t) == false (line 302)
    // for (...) == false (line 289)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode65()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == false (line 281)
    // if ($c === $n) == true (line 285)
    // for (...) == true (line 289)
    // if ($k <= $bias + self::BOOTSTRAP_TMIN) == true (line 292)
    // if ($q < $t) == true (line 302)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPunycode_encode66()
{
    $input = m::mock('UntypedParameter_input_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($char < 128) == true (line 243)
    // if (\strlen($output) > 0) == true (line 264)
    // while ($h < \count($codepoints)) == true (line 269)
    // for (...) == true (line 278)
    // if ($c < $n) == true (line 281)
    // for (...) == false (line 278)
    // while ($h < \count($codepoints)) == false (line 269)

    $actual = $this->requests_IDNAEncoder->punycode_encode($input);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
