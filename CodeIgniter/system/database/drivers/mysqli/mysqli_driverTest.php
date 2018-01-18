<?php

namespace tests;

use CI_DB_mysqli_driver;
use Mockery as m;

class CI_DB_mysqli_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_DB_mysqli_driver
*/
protected $cI_DB_mysqli_driver;

public function setUp()
{
    parent::setUp();

    $this->cI_DB_mysqli_driver = new \CI_DB_mysqli_driver();
}

public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect1()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect2()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect3()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect4()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect5()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect6()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect7()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect8()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect9()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect10()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect11()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect12()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect13()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect14()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect15()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect16()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect17()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect18()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect19()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect20()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect21()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect22()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect23()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect24()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect25()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect26()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect27()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect28()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect29()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect30()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect31()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect32()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect33()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect34()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect35()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect36()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect37()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect38()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect39()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect40()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect41()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect42()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect43()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect44()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect45()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect46()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect47()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect48()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect49()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect50()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect51()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect52()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect53()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect54()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect55()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect56()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect57()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect58()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect59()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect60()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect61()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect62()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect63()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect64()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect65()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect66()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect67()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect68()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect69()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect70()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect71()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == false (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect72()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect73()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect74()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect75()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect76()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect77()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect78()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect79()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect80()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect81()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect82()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect83()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect84()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect85()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect86()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect87()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect88()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect89()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect90()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect91()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect92()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect93()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect94()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect95()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == false (line 139)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect96()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect97()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect98()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect99()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect100()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect101()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect102()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect103()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect104()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect105()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect106()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect107()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect108()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect109()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect110()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect111()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect112()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect113()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect114()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect115()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect116()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect117()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect118()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect119()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == false (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect120()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect121()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect122()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect123()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect124()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect125()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect126()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect127()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == false (line 170)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect128()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect129()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect130()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect131()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == false (line 172)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect132()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect133()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect134()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect135()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == false (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect136()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect137()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect138()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect139()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == false (line 174)
    // if (\defined('MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT')) == true (line 184)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect140()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == false (line 201)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect141()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == false (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect142()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == false (line 204)
    // if (!$this->_mysqli->set_charset($this->char_set)) == true (line 216)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect143()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->hostname[0] === '/') == true (line 120)
    // if (isset($this->stricton)) == true (line 139)
    // if ($this->stricton) == true (line 141)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (!empty($ssl)) == true (line 170)
    // if (isset($this->encrypt['ssl_verify'])) == true (line 172)
    // if ($this->encrypt['ssl_verify']) == true (line 174)
    // if ($this->_mysqli->real_connect($hostname, $this->username, $this->password, $this->database, $port, $socket, $client_flags)) == true (line 201)
    // if ($client_flags & \MYSQLI_CLIENT_SSL && \version_compare($this->_mysqli->client_info, '5.7.3', '<=') && empty($this->_mysqli->query("SHOW STATUS LIKE 'ssl_cipher'")->fetch_object()->Value)) == true (line 204)

    $actual = $this->cI_DB_mysqli_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReconnect0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->conn_id !== \FALSE && $this->conn_id->ping() === \FALSE) == false (line 241)

    $actual = $this->cI_DB_mysqli_driver->reconnect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReconnect1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->conn_id !== \FALSE && $this->conn_id->ping() === \FALSE) == true (line 241)

    $actual = $this->cI_DB_mysqli_driver->reconnect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select0()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == false (line 257)
    // if ($this->conn_id->select_db($database)) == false (line 262)

    $actual = $this->cI_DB_mysqli_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select1()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == false (line 257)
    // if ($this->conn_id->select_db($database)) == true (line 262)

    $actual = $this->cI_DB_mysqli_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select2()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == true (line 257)
    // if ($this->conn_id->select_db($database)) == false (line 262)

    $actual = $this->cI_DB_mysqli_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select3()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == true (line 257)
    // if ($this->conn_id->select_db($database)) == true (line 262)

    $actual = $this->cI_DB_mysqli_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 281)

    $actual = $this->cI_DB_mysqli_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == true (line 281)

    $actual = $this->cI_DB_mysqli_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAffected_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mysqli_driver->affected_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_mysqli_driver->insert_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == false (line 459)
    // for (...) == false (line 466)

    $actual = $this->cI_DB_mysqli_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == false (line 459)
    // for (...) == true (line 466)
    // for (...) == false (line 466)

    $actual = $this->cI_DB_mysqli_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == true (line 459)

    $actual = $this->cI_DB_mysqli_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->_mysqli->connect_errno)) == false (line 495)

    $actual = $this->cI_DB_mysqli_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($this->_mysqli->connect_errno)) == true (line 495)

    $actual = $this->cI_DB_mysqli_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
