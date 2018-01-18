<?php

namespace tests;

use Mockery as m;
use SimplePie_Net_IPv6;

class SimplePie_Net_IPv6Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \SimplePie_Net_IPv6
*/
protected $simplePie_Net_IPv6;

public function setUp()
{
    parent::setUp();

    $this->simplePie_Net_IPv6 = new \SimplePie_Net_IPv6();
}

public function testUncompress0()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == false (line 83)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress1()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == false (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress2()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == true (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress3()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == true (line 112)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress4()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == true (line 107)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress5()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == false (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress6()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == true (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress7()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == true (line 112)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress8()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == true (line 107)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress9()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == false (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress10()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == true (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress11()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == true (line 112)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress12()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == true (line 107)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress13()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == false (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress14()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == true (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress15()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == true (line 112)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress16()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == false (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == true (line 107)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress17()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == false (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress18()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == true (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress19()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == true (line 112)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress20()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == true (line 107)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress21()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == false (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress22()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == true (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress23()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == true (line 112)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress24()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == false (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == true (line 107)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress25()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == false (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress26()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == true (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress27()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == true (line 112)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress28()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == false (line 102)
    // if ($c1 === -1 && $c2 === -1) == true (line 107)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress29()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == false (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress30()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == false (line 112)
    // if ($c2 === -1) == true (line 118)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress31()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == false (line 107)
    // if ($c1 === -1) == true (line 112)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress32()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') === 1) == true (line 83)
    // if ($ip1 === '') == true (line 86)
    // if ($ip2 === '') == true (line 94)
    // if (\strpos($ip2, '.') !== \false) == true (line 102)
    // if ($c1 === -1 && $c2 === -1) == true (line 107)

    $actual = $this->simplePie_Net_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress0()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == false (line 157)
    // if ($ip_parts[1] !== '') == false (line 173)

    $actual = $this->simplePie_Net_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress1()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == false (line 157)
    // if ($ip_parts[1] !== '') == true (line 173)

    $actual = $this->simplePie_Net_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress2()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == true (line 157)
    // if ($ip_parts[1] !== '') == false (line 173)

    $actual = $this->simplePie_Net_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress3()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == true (line 157)
    // if ($ip_parts[1] !== '') == true (line 173)

    $actual = $this->simplePie_Net_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress4()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == true (line 157)
    // if (\strlen($match[0]) > $max) == false (line 163)
    // if ($ip_parts[1] !== '') == false (line 173)

    $actual = $this->simplePie_Net_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress5()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == true (line 157)
    // if (\strlen($match[0]) > $max) == false (line 163)
    // if ($ip_parts[1] !== '') == true (line 173)

    $actual = $this->simplePie_Net_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress6()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == true (line 157)
    // if (\strlen($match[0]) > $max) == true (line 163)
    // if ($ip_parts[1] !== '') == false (line 173)

    $actual = $this->simplePie_Net_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress7()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == true (line 157)
    // if (\strlen($match[0]) > $max) == true (line 163)
    // if ($ip_parts[1] !== '') == true (line 173)

    $actual = $this->simplePie_Net_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv60()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == false (line 224)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv61()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if (\count($ipv4) === 4) == false (line 246)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv62()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if (\count($ipv4) === 4) == true (line 246)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv63()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if (\count($ipv4) === 4) == true (line 246)
    // if ((string) $value !== $ipv4_part || $value < 0 || $value > 0xff) == false (line 251)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv64()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if (\count($ipv4) === 4) == true (line 246)
    // if ((string) $value !== $ipv4_part || $value < 0 || $value > 0xff) == true (line 251)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv65()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if ($ipv6_part === '') == false (line 229)
    // if (\strlen($ipv6_part) > 4) == false (line 233)
    // if ($ipv6_part === '') == false (line 238)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 243)
    // if (\count($ipv4) === 4) == false (line 246)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv66()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if ($ipv6_part === '') == false (line 229)
    // if (\strlen($ipv6_part) > 4) == false (line 233)
    // if ($ipv6_part === '') == false (line 238)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 243)
    // if (\count($ipv4) === 4) == true (line 246)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv67()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if ($ipv6_part === '') == false (line 229)
    // if (\strlen($ipv6_part) > 4) == false (line 233)
    // if ($ipv6_part === '') == false (line 238)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 243)
    // if (\count($ipv4) === 4) == true (line 246)
    // if ((string) $value !== $ipv4_part || $value < 0 || $value > 0xff) == false (line 251)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv68()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if ($ipv6_part === '') == false (line 229)
    // if (\strlen($ipv6_part) > 4) == false (line 233)
    // if ($ipv6_part === '') == false (line 238)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 243)
    // if (\count($ipv4) === 4) == true (line 246)
    // if ((string) $value !== $ipv4_part || $value < 0 || $value > 0xff) == true (line 251)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv69()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if ($ipv6_part === '') == false (line 229)
    // if (\strlen($ipv6_part) > 4) == false (line 233)
    // if ($ipv6_part === '') == false (line 238)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == true (line 243)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv610()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if ($ipv6_part === '') == false (line 229)
    // if (\strlen($ipv6_part) > 4) == false (line 233)
    // if ($ipv6_part === '') == true (line 238)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 243)
    // if (\count($ipv4) === 4) == false (line 246)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv611()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if ($ipv6_part === '') == false (line 229)
    // if (\strlen($ipv6_part) > 4) == false (line 233)
    // if ($ipv6_part === '') == true (line 238)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 243)
    // if (\count($ipv4) === 4) == true (line 246)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv612()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if ($ipv6_part === '') == false (line 229)
    // if (\strlen($ipv6_part) > 4) == false (line 233)
    // if ($ipv6_part === '') == true (line 238)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 243)
    // if (\count($ipv4) === 4) == true (line 246)
    // if ((string) $value !== $ipv4_part || $value < 0 || $value > 0xff) == false (line 251)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv613()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if ($ipv6_part === '') == false (line 229)
    // if (\strlen($ipv6_part) > 4) == false (line 233)
    // if ($ipv6_part === '') == true (line 238)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 243)
    // if (\count($ipv4) === 4) == true (line 246)
    // if ((string) $value !== $ipv4_part || $value < 0 || $value > 0xff) == true (line 251)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv614()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if ($ipv6_part === '') == false (line 229)
    // if (\strlen($ipv6_part) > 4) == false (line 233)
    // if ($ipv6_part === '') == true (line 238)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == true (line 243)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv615()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if ($ipv6_part === '') == false (line 229)
    // if (\strlen($ipv6_part) > 4) == true (line 233)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv616()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 224)
    // if ($ipv6_part === '') == true (line 229)

    $actual = $this->simplePie_Net_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckIPv60()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    $actual = $this->simplePie_Net_IPv6->checkIPv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
