<?php

namespace tests;

use Mockery as m;
use SMTP;

class SMTPTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \SMTP
*/
protected $sMTP;

public function setUp()
{
    parent::setUp();

    $this->sMTP = new \SMTP();
}

public function testConnect0()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == false (line 329)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect1()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == false (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect2()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == true (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect3()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == true (line 313)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect4()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == false (line 329)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect5()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == false (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect6()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == true (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect7()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == true (line 313)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect8()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == false (line 329)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect9()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == false (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect10()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == true (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect11()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == true (line 313)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect12()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == false (line 329)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect13()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == false (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect14()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == true (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect15()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == true (line 313)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect16()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == false (line 263)
    // if ($this->connected()) == true (line 269)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect17()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == false (line 329)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect18()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == false (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect19()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == true (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect20()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == true (line 313)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect21()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == false (line 329)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect22()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == false (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect23()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == true (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect24()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == false (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == true (line 313)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect25()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == false (line 329)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect26()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == false (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect27()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == true (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect28()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == false (line 284)
    // if (!\is_resource($this->smtp_conn)) == true (line 313)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect29()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == false (line 329)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect30()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == false (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect31()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == false (line 313)
    // if (\substr(\PHP_OS, 0, 3) != 'WIN') == true (line 329)
    // if ($max != 0 && $timeout > $max) == true (line 332)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect32()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == false (line 269)
    // if (empty($port)) == true (line 274)
    // if ($streamok) == true (line 284)
    // if (!\is_resource($this->smtp_conn)) == true (line 313)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnect33()
{
    $host = m::mock('UntypedParameter_host_');
    $port = m::mock('UntypedParameter_port_');
    $timeout = m::mock('UntypedParameter_timeout_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_null($streamok)) == true (line 263)
    // if ($this->connected()) == true (line 269)

    $actual = $this->sMTP->connect($host, $port, $timeout, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTLS0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('STARTTLS', 'STARTTLS', 220)) == false (line 350)
    // if (\defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT')) == false (line 359)
    // if (!\stream_socket_enable_crypto($this->smtp_conn, \true, $crypto_method)) == false (line 365)

    $actual = $this->sMTP->startTLS();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTLS1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('STARTTLS', 'STARTTLS', 220)) == false (line 350)
    // if (\defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT')) == false (line 359)
    // if (!\stream_socket_enable_crypto($this->smtp_conn, \true, $crypto_method)) == true (line 365)

    $actual = $this->sMTP->startTLS();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTLS2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('STARTTLS', 'STARTTLS', 220)) == false (line 350)
    // if (\defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT')) == true (line 359)
    // if (!\stream_socket_enable_crypto($this->smtp_conn, \true, $crypto_method)) == false (line 365)

    $actual = $this->sMTP->startTLS();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTLS3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('STARTTLS', 'STARTTLS', 220)) == false (line 350)
    // if (\defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT')) == true (line 359)
    // if (!\stream_socket_enable_crypto($this->smtp_conn, \true, $crypto_method)) == true (line 365)

    $actual = $this->sMTP->startTLS();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStartTLS4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('STARTTLS', 'STARTTLS', 220)) == true (line 350)

    $actual = $this->sMTP->startTLS();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate0()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == false (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == false (line 465)
    // Default (line 478)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate1()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == false (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == true (line 465)
    // if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) == false (line 467)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate2()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == false (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == true (line 465)
    // if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) == true (line 467)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate3()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == false (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == false (line 458)
    // if (!$this->sendCommand("Password", \base64_encode($password), 235)) == false (line 461)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate4()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == false (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == false (line 458)
    // if (!$this->sendCommand("Password", \base64_encode($password), 235)) == true (line 461)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate5()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == false (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == true (line 458)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate6()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == false (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == true (line 455)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate7()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == false (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == false (line 440)
    // if (!$this->sendCommand('User & Password', \base64_encode("\0" . $username . "\0" . $password), 235)) == false (line 444)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate8()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == false (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == false (line 440)
    // if (!$this->sendCommand('User & Password', \base64_encode("\0" . $username . "\0" . $password), 235)) == true (line 444)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate9()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == false (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == true (line 440)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate10()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == true (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == false (line 465)
    // Default (line 478)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate11()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == true (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == true (line 465)
    // if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) == false (line 467)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate12()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == true (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == true (line 465)
    // if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) == true (line 467)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate13()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == true (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == false (line 458)
    // if (!$this->sendCommand("Password", \base64_encode($password), 235)) == false (line 461)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate14()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == true (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == false (line 458)
    // if (!$this->sendCommand("Password", \base64_encode($password), 235)) == true (line 461)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate15()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == true (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == true (line 458)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate16()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == true (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == true (line 455)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate17()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == true (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == false (line 440)
    // if (!$this->sendCommand('User & Password', \base64_encode("\0" . $username . "\0" . $password), 235)) == false (line 444)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate18()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == true (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == false (line 440)
    // if (!$this->sendCommand('User & Password', \base64_encode("\0" . $username . "\0" . $password), 235)) == true (line 444)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate19()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == false (line 400)
    // if (empty($authtype)) == true (line 434)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == true (line 440)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate20()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == false (line 416)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == false (line 465)
    // Default (line 478)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate21()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == false (line 416)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == true (line 465)
    // if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) == false (line 467)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate22()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == false (line 416)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == true (line 465)
    // if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) == true (line 467)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate23()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == false (line 416)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == false (line 458)
    // if (!$this->sendCommand("Password", \base64_encode($password), 235)) == false (line 461)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate24()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == false (line 416)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == false (line 458)
    // if (!$this->sendCommand("Password", \base64_encode($password), 235)) == true (line 461)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate25()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == false (line 416)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == true (line 458)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate26()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == false (line 416)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == true (line 455)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate27()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == false (line 416)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == false (line 440)
    // if (!$this->sendCommand('User & Password', \base64_encode("\0" . $username . "\0" . $password), 235)) == false (line 444)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate28()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == false (line 416)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == false (line 440)
    // if (!$this->sendCommand('User & Password', \base64_encode("\0" . $username . "\0" . $password), 235)) == true (line 444)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate29()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == false (line 416)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == true (line 440)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate30()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == false (line 416)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == true (line 430)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate31()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == false (line 465)
    // Default (line 478)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate32()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == true (line 465)
    // if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) == false (line 467)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate33()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == true (line 465)
    // if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) == true (line 467)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate34()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == false (line 458)
    // if (!$this->sendCommand("Password", \base64_encode($password), 235)) == false (line 461)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate35()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == false (line 458)
    // if (!$this->sendCommand("Password", \base64_encode($password), 235)) == true (line 461)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate36()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == true (line 458)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate37()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == true (line 455)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate38()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == false (line 440)
    // if (!$this->sendCommand('User & Password', \base64_encode("\0" . $username . "\0" . $password), 235)) == false (line 444)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate39()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == false (line 440)
    // if (!$this->sendCommand('User & Password', \base64_encode("\0" . $username . "\0" . $password), 235)) == true (line 444)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate40()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == true (line 440)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate41()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == true (line 430)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate42()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (empty($authtype)) == true (line 423)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate43()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == false (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == false (line 465)
    // Default (line 478)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate44()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == false (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == true (line 465)
    // if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) == false (line 467)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate45()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == false (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == true (line 465)
    // if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) == true (line 467)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate46()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == false (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == false (line 458)
    // if (!$this->sendCommand("Password", \base64_encode($password), 235)) == false (line 461)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate47()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == false (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == false (line 458)
    // if (!$this->sendCommand("Password", \base64_encode($password), 235)) == true (line 461)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate48()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == false (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == true (line 458)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate49()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == false (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == true (line 455)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate50()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == false (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == false (line 440)
    // if (!$this->sendCommand('User & Password', \base64_encode("\0" . $username . "\0" . $password), 235)) == false (line 444)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate51()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == false (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == false (line 440)
    // if (!$this->sendCommand('User & Password', \base64_encode("\0" . $username . "\0" . $password), 235)) == true (line 444)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate52()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == false (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == true (line 440)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate53()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == false (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == true (line 430)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate54()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == false (line 418)
    // if (empty($authtype)) == true (line 423)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate55()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == true (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == false (line 465)
    // Default (line 478)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate56()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == true (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == true (line 465)
    // if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) == false (line 467)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate57()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == true (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == false (line 453)
    // Case 'CRAM-MD5' == true (line 465)
    // if (!$this->sendCommand('AUTH CRAM-MD5', 'AUTH CRAM-MD5', 334)) == true (line 467)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate58()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == true (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == false (line 458)
    // if (!$this->sendCommand("Password", \base64_encode($password), 235)) == false (line 461)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate59()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == true (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == false (line 458)
    // if (!$this->sendCommand("Password", \base64_encode($password), 235)) == true (line 461)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate60()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == true (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == false (line 455)
    // if (!$this->sendCommand("Username", \base64_encode($username), 334)) == true (line 458)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate61()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == true (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == false (line 438)
    // Case 'LOGIN' == true (line 453)
    // if (!$this->sendCommand('AUTH', 'AUTH LOGIN', 334)) == true (line 455)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate62()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == true (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == false (line 440)
    // if (!$this->sendCommand('User & Password', \base64_encode("\0" . $username . "\0" . $password), 235)) == false (line 444)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate63()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == true (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == false (line 440)
    // if (!$this->sendCommand('User & Password', \base64_encode("\0" . $username . "\0" . $password), 235)) == true (line 444)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate64()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == true (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == false (line 430)
    // switch ($authtype) (line 437)
    // Case 'PLAIN' == true (line 438)
    // if (!$this->sendCommand('AUTH', 'AUTH PLAIN', 334)) == true (line 440)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate65()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == true (line 418)
    // if (empty($authtype)) == false (line 423)
    // if (!\in_array($authtype, $this->server_caps['AUTH'])) == true (line 430)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate66()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == false (line 403)
    // if (empty($authtype)) == true (line 416)
    // if (\in_array($method, $this->server_caps['AUTH'])) == true (line 418)
    // if (empty($authtype)) == true (line 423)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate67()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 395)
    // if (\array_key_exists('EHLO', $this->server_caps)) == true (line 400)
    // if (!\array_key_exists('AUTH', $this->server_caps)) == true (line 403)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAuthenticate68()
{
    $username = m::mock('UntypedParameter_username_');
    $password = m::mock('UntypedParameter_password_');
    $authtype = m::mock('UntypedParameter_authtype_');
    $realm = m::mock('UntypedParameter_realm_');
    $workstation = m::mock('UntypedParameter_workstation_');
    $OAuth = m::mock('UntypedParameter_OAuth_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == true (line 395)

    $actual = $this->sMTP->authenticate($username, $password, $authtype, $realm, $workstation, $OAuth);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnected0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->smtp_conn)) == false (line 528)

    $actual = $this->sMTP->connected();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnected1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->smtp_conn)) == true (line 528)
    // if ($sock_status['eof']) == false (line 530)

    $actual = $this->sMTP->connected();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testConnected2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->smtp_conn)) == true (line 528)
    // if ($sock_status['eof']) == true (line 530)

    $actual = $this->sMTP->connected();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->smtp_conn)) == false (line 556)

    $actual = $this->sMTP->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->smtp_conn)) == true (line 556)

    $actual = $this->sMTP->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData0()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData1()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData2()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData3()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData4()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData5()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData6()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData7()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData8()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData9()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData10()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData11()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData12()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData13()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData14()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData15()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData16()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData17()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData18()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData19()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData20()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData21()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData22()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData23()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData24()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData25()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData26()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData27()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData28()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData29()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData30()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == false (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData31()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData32()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData33()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData34()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData35()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData36()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData37()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData38()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData39()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData40()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData41()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData42()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData43()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData44()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData45()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData46()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == false (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData47()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData48()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData49()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData50()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData51()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData52()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData53()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData54()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData55()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == false (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData56()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData57()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData58()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == false (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData59()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData60()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == false (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData61()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == false (line 579)
    // if (!empty($field) && \strpos($field, ' ') === \false) == true (line 601)
    // if ($in_headers and $line == '') == true (line 607)
    // while (isset($line[self::MAX_LINE_LENGTH])) == true (line 612)
    // if (!$pos) == true (line 617)
    // if ($in_headers) == true (line 629)
    // while (isset($line[self::MAX_LINE_LENGTH])) == false (line 612)
    // if (!empty($line_out) and $line_out[0] == '.') == true (line 638)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testData62()
{
    $msg_data = m::mock('UntypedParameter_msg_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->sendCommand('DATA', 'DATA', 354)) == true (line 579)

    $actual = $this->sMTP->data($msg_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHello0()
{
    $host = m::mock('UntypedParameter_host_');

    // TODO: Your mock expectations here

    $actual = $this->sMTP->hello($host);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMail0()
{
    $from = m::mock('UntypedParameter_from_');

    // TODO: Your mock expectations here

    $actual = $this->sMTP->mail($from);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuit0()
{
    $close_on_error = m::mock('UntypedParameter_close_on_error_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($noerror or $close_on_error) == false (line 767)

    $actual = $this->sMTP->quit($close_on_error);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testQuit1()
{
    $close_on_error = m::mock('UntypedParameter_close_on_error_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($noerror or $close_on_error) == true (line 767)

    $actual = $this->sMTP->quit($close_on_error);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRecipient0()
{
    $address = m::mock('UntypedParameter_address_');

    // TODO: Your mock expectations here

    $actual = $this->sMTP->recipient($address);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReset0()
{
    // TODO: Your mock expectations here

    $actual = $this->sMTP->reset();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSendAndMail0()
{
    $from = m::mock('UntypedParameter_from_');

    // TODO: Your mock expectations here

    $actual = $this->sMTP->sendAndMail($from);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVerify0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->sMTP->verify($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNoop0()
{
    // TODO: Your mock expectations here

    $actual = $this->sMTP->noop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTurn0()
{
    // TODO: Your mock expectations here

    $actual = $this->sMTP->turn();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClient_send0()
{
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    $actual = $this->sMTP->client_send($data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetError0()
{
    // TODO: Your mock expectations here

    $actual = $this->sMTP->getError();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetServerExtList0()
{
    // TODO: Your mock expectations here

    $actual = $this->sMTP->getServerExtList();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetServerExt0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 973)
    // if (!\array_key_exists($name, $this->server_caps)) == false (line 979)

    $actual = $this->sMTP->getServerExt($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetServerExt1()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 973)
    // if (!\array_key_exists($name, $this->server_caps)) == true (line 979)
    // if ($name == 'HELO') == false (line 980)
    // if ($name == 'EHLO' || \array_key_exists('EHLO', $this->server_caps)) == false (line 983)

    $actual = $this->sMTP->getServerExt($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetServerExt2()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 973)
    // if (!\array_key_exists($name, $this->server_caps)) == true (line 979)
    // if ($name == 'HELO') == false (line 980)
    // if ($name == 'EHLO' || \array_key_exists('EHLO', $this->server_caps)) == true (line 983)

    $actual = $this->sMTP->getServerExt($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetServerExt3()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == false (line 973)
    // if (!\array_key_exists($name, $this->server_caps)) == true (line 979)
    // if ($name == 'HELO') == true (line 980)

    $actual = $this->sMTP->getServerExt($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetServerExt4()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->server_caps) == true (line 973)

    $actual = $this->sMTP->getServerExt($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastReply0()
{
    // TODO: Your mock expectations here

    $actual = $this->sMTP->getLastReply();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetVerp0()
{
    $enabled = m::mock('UntypedParameter_enabled_');

    // TODO: Your mock expectations here

    $actual = $this->sMTP->setVerp($enabled);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetVerp0()
{
    // TODO: Your mock expectations here

    $actual = $this->sMTP->getVerp();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDebugOutput0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->sMTP->setDebugOutput($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDebugOutput0()
{
    // TODO: Your mock expectations here

    $actual = $this->sMTP->getDebugOutput();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetDebugLevel0()
{
    $level = m::mock('UntypedParameter_level_');

    // TODO: Your mock expectations here

    $actual = $this->sMTP->setDebugLevel($level);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDebugLevel0()
{
    // TODO: Your mock expectations here

    $actual = $this->sMTP->getDebugLevel();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetTimeout0()
{
    $timeout = m::mock('UntypedParameter_timeout_');

    // TODO: Your mock expectations here

    $actual = $this->sMTP->setTimeout($timeout);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTimeout0()
{
    // TODO: Your mock expectations here

    $actual = $this->sMTP->getTimeout();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastTransactionID0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($reply)) == false (line 1174)

    $actual = $this->sMTP->getLastTransactionID();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastTransactionID1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($reply)) == false (line 1174)
    // if (\preg_match($smtp_transaction_id_pattern, $reply, $matches)) == false (line 1179)

    $actual = $this->sMTP->getLastTransactionID();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastTransactionID2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($reply)) == false (line 1174)
    // if (\preg_match($smtp_transaction_id_pattern, $reply, $matches)) == true (line 1179)

    $actual = $this->sMTP->getLastTransactionID();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetLastTransactionID3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($reply)) == true (line 1174)

    $actual = $this->sMTP->getLastTransactionID();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
