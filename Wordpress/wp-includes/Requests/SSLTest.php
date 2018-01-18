<?php

namespace tests;

use Mockery as m;
use Requests_SSL;

class Requests_SSLTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_SSL
*/
protected $requests_SSL;

public function setUp()
{
    parent::setUp();

    $this->requests_SSL = new \Requests_SSL();
}

public function testVerify_certificate0()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == false (line 43)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == false (line 65)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate1()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == false (line 43)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == false (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate2()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == false (line 43)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == true (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate3()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == false (line 65)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate4()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == false (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate5()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == true (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate6()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == false (line 47)
    // if (self::match_domain($host, $altname) === \true) == false (line 57)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == false (line 65)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate7()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == false (line 47)
    // if (self::match_domain($host, $altname) === \true) == false (line 57)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == false (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate8()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == false (line 47)
    // if (self::match_domain($host, $altname) === \true) == false (line 57)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == true (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate9()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == false (line 47)
    // if (self::match_domain($host, $altname) === \true) == true (line 57)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate10()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == true (line 47)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == false (line 65)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate11()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == true (line 47)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == false (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate12()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == false (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == true (line 47)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == true (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate13()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == false (line 43)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == false (line 65)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate14()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == false (line 43)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == false (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate15()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == false (line 43)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == true (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate16()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == false (line 65)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate17()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == false (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate18()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == true (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate19()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == false (line 47)
    // if (self::match_domain($host, $altname) === \true) == false (line 57)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == false (line 65)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate20()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == false (line 47)
    // if (self::match_domain($host, $altname) === \true) == false (line 57)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == false (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate21()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == false (line 47)
    // if (self::match_domain($host, $altname) === \true) == false (line 57)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == true (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate22()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == false (line 47)
    // if (self::match_domain($host, $altname) === \true) == true (line 57)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate23()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == true (line 47)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == false (line 65)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate24()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == true (line 47)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == false (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_certificate25()
{
    $host = m::mock('UntypedParameter_host_');
    $cert = m::mock('UntypedParameter_cert_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\ip2long($host) === \false) == true (line 35)
    // if (!empty($cert['extensions']) && !empty($cert['extensions']['subjectAltName'])) == true (line 43)
    // if (\strpos($altname, 'DNS:') !== 0) == true (line 47)
    // if (!$has_dns_alt && !empty($cert['subject']['CN'])) == true (line 65)
    // if (self::match_domain($host, $cert['subject']['CN']) === \true) == true (line 67)

    $actual = $this->requests_SSL->verify_certificate($host, $cert);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_reference_name0()
{
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($first, '*') !== \false) == false (line 97)

    $actual = $this->requests_SSL->verify_reference_name($reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_reference_name1()
{
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($first, '*') !== \false) == false (line 97)
    // if (\strpos($part, '*') !== \false) == false (line 111)

    $actual = $this->requests_SSL->verify_reference_name($reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_reference_name2()
{
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($first, '*') !== \false) == false (line 97)
    // if (\strpos($part, '*') !== \false) == true (line 111)

    $actual = $this->requests_SSL->verify_reference_name($reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_reference_name3()
{
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($first, '*') !== \false) == true (line 97)
    // if ($first !== '*') == false (line 99)
    // if (\count($parts) < 2) == false (line 104)

    $actual = $this->requests_SSL->verify_reference_name($reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_reference_name4()
{
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($first, '*') !== \false) == true (line 97)
    // if ($first !== '*') == false (line 99)
    // if (\count($parts) < 2) == false (line 104)
    // if (\strpos($part, '*') !== \false) == false (line 111)

    $actual = $this->requests_SSL->verify_reference_name($reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_reference_name5()
{
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($first, '*') !== \false) == true (line 97)
    // if ($first !== '*') == false (line 99)
    // if (\count($parts) < 2) == false (line 104)
    // if (\strpos($part, '*') !== \false) == true (line 111)

    $actual = $this->requests_SSL->verify_reference_name($reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_reference_name6()
{
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($first, '*') !== \false) == true (line 97)
    // if ($first !== '*') == false (line 99)
    // if (\count($parts) < 2) == true (line 104)

    $actual = $this->requests_SSL->verify_reference_name($reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify_reference_name7()
{
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\strpos($first, '*') !== \false) == true (line 97)
    // if ($first !== '*') == true (line 99)

    $actual = $this->requests_SSL->verify_reference_name($reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_domain0()
{
    $host = m::mock('UntypedParameter_host_');
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::verify_reference_name($reference) !== \true) == false (line 129)
    // if ($host === $reference) == false (line 134)
    // if (\ip2long($host) === \false) == false (line 141)

    $actual = $this->requests_SSL->match_domain($host, $reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_domain1()
{
    $host = m::mock('UntypedParameter_host_');
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::verify_reference_name($reference) !== \true) == false (line 129)
    // if ($host === $reference) == false (line 134)
    // if (\ip2long($host) === \false) == true (line 141)
    // if ($wildcard === $reference) == false (line 145)

    $actual = $this->requests_SSL->match_domain($host, $reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_domain2()
{
    $host = m::mock('UntypedParameter_host_');
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::verify_reference_name($reference) !== \true) == false (line 129)
    // if ($host === $reference) == false (line 134)
    // if (\ip2long($host) === \false) == true (line 141)
    // if ($wildcard === $reference) == true (line 145)

    $actual = $this->requests_SSL->match_domain($host, $reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_domain3()
{
    $host = m::mock('UntypedParameter_host_');
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::verify_reference_name($reference) !== \true) == false (line 129)
    // if ($host === $reference) == true (line 134)

    $actual = $this->requests_SSL->match_domain($host, $reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMatch_domain4()
{
    $host = m::mock('UntypedParameter_host_');
    $reference = m::mock('UntypedParameter_reference_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::verify_reference_name($reference) !== \true) == true (line 129)

    $actual = $this->requests_SSL->match_domain($host, $reference);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
