<?php

namespace tests\Symfony\Bridge\PhpUnit;

use Mockery as m;
use Symfony\Bridge\PhpUnit\DnsMock;

class DnsMockTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\PhpUnit\DnsMock
*/
protected $dnsMock;

public function setUp()
{
    parent::setUp();

    $this->dnsMock = new \Symfony\Bridge\PhpUnit\DnsMock();
}

public function testWithMockedHosts0()
{
    $hosts = [];

    // TODO: Your mock expectations here

    $actual = $this->dnsMock->withMockedHosts($hosts);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckdnsrr0()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 47)
    // if (isset(self::$hosts[$hostname])) == false (line 50)

    $actual = $this->dnsMock->checkdnsrr($hostname, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckdnsrr1()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 47)
    // if (isset(self::$hosts[$hostname])) == true (line 50)

    $actual = $this->dnsMock->checkdnsrr($hostname, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckdnsrr2()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 47)
    // if (isset(self::$hosts[$hostname])) == true (line 50)
    // if ($record['type'] === $type) == false (line 54)
    // if ('ANY' === $type && isset(self::$dnsTypes[$record['type']]) && 'HINFO' !== $record['type']) == false (line 57)

    $actual = $this->dnsMock->checkdnsrr($hostname, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckdnsrr3()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 47)
    // if (isset(self::$hosts[$hostname])) == true (line 50)
    // if ($record['type'] === $type) == false (line 54)
    // if ('ANY' === $type && isset(self::$dnsTypes[$record['type']]) && 'HINFO' !== $record['type']) == true (line 57)

    $actual = $this->dnsMock->checkdnsrr($hostname, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckdnsrr4()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 47)
    // if (isset(self::$hosts[$hostname])) == true (line 50)
    // if ($record['type'] === $type) == true (line 54)

    $actual = $this->dnsMock->checkdnsrr($hostname, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCheckdnsrr5()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == true (line 47)

    $actual = $this->dnsMock->checkdnsrr($hostname, $type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetmxrr0()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $mxhosts = m::mock('UntypedParameter_mxhosts_');
    $weight = m::mock('UntypedParameter_weight_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 68)
    // if (isset(self::$hosts[$hostname])) == false (line 73)

    $actual = $this->dnsMock->getmxrr($hostname, $mxhosts, $weight);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetmxrr1()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $mxhosts = m::mock('UntypedParameter_mxhosts_');
    $weight = m::mock('UntypedParameter_weight_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 68)
    // if (isset(self::$hosts[$hostname])) == true (line 73)

    $actual = $this->dnsMock->getmxrr($hostname, $mxhosts, $weight);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetmxrr2()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $mxhosts = m::mock('UntypedParameter_mxhosts_');
    $weight = m::mock('UntypedParameter_weight_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 68)
    // if (isset(self::$hosts[$hostname])) == true (line 73)
    // if ('MX' === $record['type']) == false (line 75)

    $actual = $this->dnsMock->getmxrr($hostname, $mxhosts, $weight);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetmxrr3()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $mxhosts = m::mock('UntypedParameter_mxhosts_');
    $weight = m::mock('UntypedParameter_weight_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 68)
    // if (isset(self::$hosts[$hostname])) == true (line 73)
    // if ('MX' === $record['type']) == true (line 75)

    $actual = $this->dnsMock->getmxrr($hostname, $mxhosts, $weight);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetmxrr4()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $mxhosts = m::mock('UntypedParameter_mxhosts_');
    $weight = m::mock('UntypedParameter_weight_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == true (line 68)

    $actual = $this->dnsMock->getmxrr($hostname, $mxhosts, $weight);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbyaddr0()
{
    $ipAddress = m::mock('UntypedParameter_ipAddress_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 87)

    $actual = $this->dnsMock->gethostbyaddr($ipAddress);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbyaddr1()
{
    $ipAddress = m::mock('UntypedParameter_ipAddress_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 87)

    $actual = $this->dnsMock->gethostbyaddr($ipAddress);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbyaddr2()
{
    $ipAddress = m::mock('UntypedParameter_ipAddress_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 87)
    // if ('A' === $record['type'] && $ipAddress === $record['ip']) == false (line 92)
    // if ('AAAA' === $record['type'] && $ipAddress === $record['ipv6']) == false (line 95)

    $actual = $this->dnsMock->gethostbyaddr($ipAddress);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbyaddr3()
{
    $ipAddress = m::mock('UntypedParameter_ipAddress_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 87)
    // if ('A' === $record['type'] && $ipAddress === $record['ip']) == false (line 92)
    // if ('AAAA' === $record['type'] && $ipAddress === $record['ipv6']) == true (line 95)

    $actual = $this->dnsMock->gethostbyaddr($ipAddress);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbyaddr4()
{
    $ipAddress = m::mock('UntypedParameter_ipAddress_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 87)
    // if ('A' === $record['type'] && $ipAddress === $record['ip']) == true (line 92)

    $actual = $this->dnsMock->gethostbyaddr($ipAddress);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbyaddr5()
{
    $ipAddress = m::mock('UntypedParameter_ipAddress_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == true (line 87)

    $actual = $this->dnsMock->gethostbyaddr($ipAddress);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbyname0()
{
    $hostname = m::mock('UntypedParameter_hostname_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 106)
    // if (isset(self::$hosts[$hostname])) == false (line 109)

    $actual = $this->dnsMock->gethostbyname($hostname);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbyname1()
{
    $hostname = m::mock('UntypedParameter_hostname_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 106)
    // if (isset(self::$hosts[$hostname])) == true (line 109)

    $actual = $this->dnsMock->gethostbyname($hostname);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbyname2()
{
    $hostname = m::mock('UntypedParameter_hostname_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 106)
    // if (isset(self::$hosts[$hostname])) == true (line 109)
    // if ('A' === $record['type']) == false (line 111)

    $actual = $this->dnsMock->gethostbyname($hostname);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbyname3()
{
    $hostname = m::mock('UntypedParameter_hostname_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 106)
    // if (isset(self::$hosts[$hostname])) == true (line 109)
    // if ('A' === $record['type']) == true (line 111)

    $actual = $this->dnsMock->gethostbyname($hostname);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbyname4()
{
    $hostname = m::mock('UntypedParameter_hostname_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == true (line 106)

    $actual = $this->dnsMock->gethostbyname($hostname);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbynamel0()
{
    $hostname = m::mock('UntypedParameter_hostname_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 122)
    // if (isset(self::$hosts[$hostname])) == false (line 127)

    $actual = $this->dnsMock->gethostbynamel($hostname);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbynamel1()
{
    $hostname = m::mock('UntypedParameter_hostname_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 122)
    // if (isset(self::$hosts[$hostname])) == true (line 127)

    $actual = $this->dnsMock->gethostbynamel($hostname);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbynamel2()
{
    $hostname = m::mock('UntypedParameter_hostname_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 122)
    // if (isset(self::$hosts[$hostname])) == true (line 127)
    // if ('A' === $record['type']) == false (line 131)

    $actual = $this->dnsMock->gethostbynamel($hostname);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbynamel3()
{
    $hostname = m::mock('UntypedParameter_hostname_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 122)
    // if (isset(self::$hosts[$hostname])) == true (line 127)
    // if ('A' === $record['type']) == true (line 131)

    $actual = $this->dnsMock->gethostbynamel($hostname);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGethostbynamel4()
{
    $hostname = m::mock('UntypedParameter_hostname_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == true (line 122)

    $actual = $this->dnsMock->gethostbynamel($hostname);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDns_get_record0()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');
    $authns = m::mock('UntypedParameter_authns_');
    $addtl = m::mock('UntypedParameter_addtl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 142)
    // if (isset(self::$hosts[$hostname])) == false (line 148)

    $actual = $this->dnsMock->dns_get_record($hostname, $type, $authns, $addtl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDns_get_record1()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');
    $authns = m::mock('UntypedParameter_authns_');
    $addtl = m::mock('UntypedParameter_addtl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 142)
    // if (isset(self::$hosts[$hostname])) == true (line 148)
    // if (DNS_ANY === $type) == false (line 149)

    $actual = $this->dnsMock->dns_get_record($hostname, $type, $authns, $addtl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDns_get_record2()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');
    $authns = m::mock('UntypedParameter_authns_');
    $addtl = m::mock('UntypedParameter_addtl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 142)
    // if (isset(self::$hosts[$hostname])) == true (line 148)
    // if (DNS_ANY === $type) == false (line 149)
    // if (isset(self::$dnsTypes[$record['type']]) && self::$dnsTypes[$record['type']] & $type) == false (line 155)

    $actual = $this->dnsMock->dns_get_record($hostname, $type, $authns, $addtl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDns_get_record3()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');
    $authns = m::mock('UntypedParameter_authns_');
    $addtl = m::mock('UntypedParameter_addtl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 142)
    // if (isset(self::$hosts[$hostname])) == true (line 148)
    // if (DNS_ANY === $type) == false (line 149)
    // if (isset(self::$dnsTypes[$record['type']]) && self::$dnsTypes[$record['type']] & $type) == true (line 155)

    $actual = $this->dnsMock->dns_get_record($hostname, $type, $authns, $addtl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDns_get_record4()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');
    $authns = m::mock('UntypedParameter_authns_');
    $addtl = m::mock('UntypedParameter_addtl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 142)
    // if (isset(self::$hosts[$hostname])) == true (line 148)
    // if (DNS_ANY === $type) == true (line 149)

    $actual = $this->dnsMock->dns_get_record($hostname, $type, $authns, $addtl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDns_get_record5()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');
    $authns = m::mock('UntypedParameter_authns_');
    $addtl = m::mock('UntypedParameter_addtl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 142)
    // if (isset(self::$hosts[$hostname])) == true (line 148)
    // if (DNS_ANY === $type) == true (line 149)
    // if (isset(self::$dnsTypes[$record['type']]) && self::$dnsTypes[$record['type']] & $type) == false (line 155)

    $actual = $this->dnsMock->dns_get_record($hostname, $type, $authns, $addtl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDns_get_record6()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');
    $authns = m::mock('UntypedParameter_authns_');
    $addtl = m::mock('UntypedParameter_addtl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == false (line 142)
    // if (isset(self::$hosts[$hostname])) == true (line 148)
    // if (DNS_ANY === $type) == true (line 149)
    // if (isset(self::$dnsTypes[$record['type']]) && self::$dnsTypes[$record['type']] & $type) == true (line 155)

    $actual = $this->dnsMock->dns_get_record($hostname, $type, $authns, $addtl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDns_get_record7()
{
    $hostname = m::mock('UntypedParameter_hostname_');
    $type = m::mock('UntypedParameter_type_');
    $authns = m::mock('UntypedParameter_authns_');
    $addtl = m::mock('UntypedParameter_addtl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!self::$hosts) == true (line 142)

    $actual = $this->dnsMock->dns_get_record($hostname, $type, $authns, $addtl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == false (line 169)
    // if (0 === strpos($class, 'Tests\\')) == false (line 172)

    $actual = $this->dnsMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == false (line 169)
    // if (0 === strpos($class, 'Tests\\')) == false (line 172)
    // if (function_exists($ns . '\\checkdnsrr')) == false (line 176)

    $actual = $this->dnsMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister2()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == false (line 169)
    // if (0 === strpos($class, 'Tests\\')) == false (line 172)
    // if (function_exists($ns . '\\checkdnsrr')) == true (line 176)

    $actual = $this->dnsMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister3()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == false (line 169)
    // if (0 === strpos($class, 'Tests\\')) == true (line 172)

    $actual = $this->dnsMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister4()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == false (line 169)
    // if (0 === strpos($class, 'Tests\\')) == true (line 172)
    // if (function_exists($ns . '\\checkdnsrr')) == false (line 176)

    $actual = $this->dnsMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister5()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == false (line 169)
    // if (0 === strpos($class, 'Tests\\')) == true (line 172)
    // if (function_exists($ns . '\\checkdnsrr')) == true (line 176)

    $actual = $this->dnsMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister6()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == true (line 169)

    $actual = $this->dnsMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister7()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == true (line 169)
    // if (function_exists($ns . '\\checkdnsrr')) == false (line 176)

    $actual = $this->dnsMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister8()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 < strpos($class, '\\Tests\\')) == true (line 169)
    // if (function_exists($ns . '\\checkdnsrr')) == true (line 176)

    $actual = $this->dnsMock->register($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
