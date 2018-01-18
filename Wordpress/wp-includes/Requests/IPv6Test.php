<?php

namespace tests;

use Mockery as m;
use Requests_IPv6;

class Requests_IPv6Test extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_IPv6
*/
protected $requests_IPv6;

public function setUp()
{
    parent::setUp();

    $this->requests_IPv6 = new \Requests_IPv6();
}

public function testUncompress0()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') !== 1) == false (line 38)
    // if (\strpos($ip2, '.') !== \false) == false (line 46)
    // if ($c1 === -1 && $c2 === -1) == false (line 50)
    // if ($c1 === -1) == false (line 54)
    // if ($c2 === -1) == false (line 59)

    $actual = $this->requests_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress1()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') !== 1) == false (line 38)
    // if (\strpos($ip2, '.') !== \false) == false (line 46)
    // if ($c1 === -1 && $c2 === -1) == false (line 50)
    // if ($c1 === -1) == false (line 54)
    // if ($c2 === -1) == true (line 59)

    $actual = $this->requests_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress2()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') !== 1) == false (line 38)
    // if (\strpos($ip2, '.') !== \false) == false (line 46)
    // if ($c1 === -1 && $c2 === -1) == false (line 50)
    // if ($c1 === -1) == true (line 54)

    $actual = $this->requests_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress3()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') !== 1) == false (line 38)
    // if (\strpos($ip2, '.') !== \false) == false (line 46)
    // if ($c1 === -1 && $c2 === -1) == true (line 50)

    $actual = $this->requests_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress4()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') !== 1) == false (line 38)
    // if (\strpos($ip2, '.') !== \false) == true (line 46)
    // if ($c1 === -1 && $c2 === -1) == false (line 50)
    // if ($c1 === -1) == false (line 54)
    // if ($c2 === -1) == false (line 59)

    $actual = $this->requests_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress5()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') !== 1) == false (line 38)
    // if (\strpos($ip2, '.') !== \false) == true (line 46)
    // if ($c1 === -1 && $c2 === -1) == false (line 50)
    // if ($c1 === -1) == false (line 54)
    // if ($c2 === -1) == true (line 59)

    $actual = $this->requests_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress6()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') !== 1) == false (line 38)
    // if (\strpos($ip2, '.') !== \false) == true (line 46)
    // if ($c1 === -1 && $c2 === -1) == false (line 50)
    // if ($c1 === -1) == true (line 54)

    $actual = $this->requests_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress7()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') !== 1) == false (line 38)
    // if (\strpos($ip2, '.') !== \false) == true (line 46)
    // if ($c1 === -1 && $c2 === -1) == true (line 50)

    $actual = $this->requests_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUncompress8()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\substr_count($ip, '::') !== 1) == true (line 38)

    $actual = $this->requests_IPv6->uncompress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress0()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == false (line 94)
    // if ($ip_parts[1] !== '') == false (line 107)

    $actual = $this->requests_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress1()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == false (line 94)
    // if ($ip_parts[1] !== '') == true (line 107)

    $actual = $this->requests_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress2()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == true (line 94)
    // if ($ip_parts[1] !== '') == false (line 107)

    $actual = $this->requests_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress3()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == true (line 94)
    // if ($ip_parts[1] !== '') == true (line 107)

    $actual = $this->requests_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress4()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == true (line 94)
    // if (\strlen($match[0]) > $max) == false (line 98)
    // if ($ip_parts[1] !== '') == false (line 107)

    $actual = $this->requests_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress5()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == true (line 94)
    // if (\strlen($match[0]) > $max) == false (line 98)
    // if ($ip_parts[1] !== '') == true (line 107)

    $actual = $this->requests_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress6()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == true (line 94)
    // if (\strlen($match[0]) > $max) == true (line 98)
    // if ($ip_parts[1] !== '') == false (line 107)

    $actual = $this->requests_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCompress7()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\preg_match_all('/(?:^|:)(?:0(?::|$))+/', $ip_parts[0], $matches, \PREG_OFFSET_CAPTURE)) == true (line 94)
    // if (\strlen($match[0]) > $max) == true (line 98)
    // if ($ip_parts[1] !== '') == true (line 107)

    $actual = $this->requests_IPv6->compress($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv60()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == false (line 152)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv61()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if (\count($ipv4) === 4) == false (line 176)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv62()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if (\count($ipv4) === 4) == true (line 176)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv63()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if (\count($ipv4) === 4) == true (line 176)
    // if ((string) $value !== $ipv4_part || $value < 0 || $value > 0xff) == false (line 179)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv64()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if (\count($ipv4) === 4) == true (line 176)
    // if ((string) $value !== $ipv4_part || $value < 0 || $value > 0xff) == true (line 179)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv65()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if ($ipv6_part === '') == false (line 155)
    // if (\strlen($ipv6_part) > 4) == false (line 160)
    // if ($ipv6_part === '') == false (line 166)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 172)
    // if (\count($ipv4) === 4) == false (line 176)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv66()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if ($ipv6_part === '') == false (line 155)
    // if (\strlen($ipv6_part) > 4) == false (line 160)
    // if ($ipv6_part === '') == false (line 166)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 172)
    // if (\count($ipv4) === 4) == true (line 176)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv67()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if ($ipv6_part === '') == false (line 155)
    // if (\strlen($ipv6_part) > 4) == false (line 160)
    // if ($ipv6_part === '') == false (line 166)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 172)
    // if (\count($ipv4) === 4) == true (line 176)
    // if ((string) $value !== $ipv4_part || $value < 0 || $value > 0xff) == false (line 179)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv68()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if ($ipv6_part === '') == false (line 155)
    // if (\strlen($ipv6_part) > 4) == false (line 160)
    // if ($ipv6_part === '') == false (line 166)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 172)
    // if (\count($ipv4) === 4) == true (line 176)
    // if ((string) $value !== $ipv4_part || $value < 0 || $value > 0xff) == true (line 179)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv69()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if ($ipv6_part === '') == false (line 155)
    // if (\strlen($ipv6_part) > 4) == false (line 160)
    // if ($ipv6_part === '') == false (line 166)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == true (line 172)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv610()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if ($ipv6_part === '') == false (line 155)
    // if (\strlen($ipv6_part) > 4) == false (line 160)
    // if ($ipv6_part === '') == true (line 166)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 172)
    // if (\count($ipv4) === 4) == false (line 176)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv611()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if ($ipv6_part === '') == false (line 155)
    // if (\strlen($ipv6_part) > 4) == false (line 160)
    // if ($ipv6_part === '') == true (line 166)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 172)
    // if (\count($ipv4) === 4) == true (line 176)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv612()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if ($ipv6_part === '') == false (line 155)
    // if (\strlen($ipv6_part) > 4) == false (line 160)
    // if ($ipv6_part === '') == true (line 166)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 172)
    // if (\count($ipv4) === 4) == true (line 176)
    // if ((string) $value !== $ipv4_part || $value < 0 || $value > 0xff) == false (line 179)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv613()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if ($ipv6_part === '') == false (line 155)
    // if (\strlen($ipv6_part) > 4) == false (line 160)
    // if ($ipv6_part === '') == true (line 166)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == false (line 172)
    // if (\count($ipv4) === 4) == true (line 176)
    // if ((string) $value !== $ipv4_part || $value < 0 || $value > 0xff) == true (line 179)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv614()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if ($ipv6_part === '') == false (line 155)
    // if (\strlen($ipv6_part) > 4) == false (line 160)
    // if ($ipv6_part === '') == true (line 166)
    // if (\dechex($value) !== \strtolower($ipv6_part) || $value < 0 || $value > 0xffff) == true (line 172)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv615()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if ($ipv6_part === '') == false (line 155)
    // if (\strlen($ipv6_part) > 4) == true (line 160)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheck_ipv616()
{
    $ip = m::mock('UntypedParameter_ip_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\count($ipv6) === 8 && \count($ipv4) === 1 || \count($ipv6) === 6 && \count($ipv4) === 4) == true (line 152)
    // if ($ipv6_part === '') == true (line 155)

    $actual = $this->requests_IPv6->check_ipv6($ip);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
