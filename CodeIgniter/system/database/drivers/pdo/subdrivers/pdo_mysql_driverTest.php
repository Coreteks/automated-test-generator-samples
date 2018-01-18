<?php

namespace tests;

use CI_DB_pdo_mysql_driver;
use Mockery as m;

class CI_DB_pdo_mysql_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_pdo_mysql_driver
*/
protected $cI_DB_pdo_mysql_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_pdo_mysql_driver = new \CI_DB_pdo_mysql_driver($this->_params);
}

public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == false (line 125)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect1()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == false (line 125)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect2()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == false (line 125)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect3()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == false (line 125)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect4()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == false (line 125)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect5()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == false (line 125)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect6()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == false (line 125)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect7()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == false (line 125)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect8()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect9()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect10()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect11()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect12()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect13()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect14()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect15()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect16()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect17()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect18()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect19()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect20()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect21()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect22()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect23()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect24()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect25()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect26()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect27()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect28()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect29()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect30()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect31()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == false (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect32()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect33()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect34()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect35()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect36()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect37()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect38()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect39()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == false (line 143)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect40()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect41()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect42()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect43()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect44()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect45()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect46()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect47()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == false (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect48()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect49()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect50()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect51()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == false (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect52()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect53()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == false (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect54()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == false (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect55()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->stricton)) == true (line 125)
    // if ($this->stricton) == true (line 127)
    // if (!empty($sql)) == true (line 143)
    // if (empty($this->options[\PDO::MYSQL_ATTR_INIT_COMMAND])) == true (line 145)
    // if ($this->compress === \TRUE) == true (line 156)
    // if (\is_array($this->encrypt)) == true (line 161)
    // if (($pdo = parent::db_connect($persistent)) !== \FALSE && !empty($ssl) && \version_compare($pdo->getAttribute(\PDO::ATTR_CLIENT_VERSION), '5.7.3', '<=') && empty($pdo->query("SHOW STATUS LIKE 'ssl_cipher'")->fetchObject()->Value)) == true (line 176)

    $actual = $this->cI_DB_pdo_mysql_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select0()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == false (line 201)
    // if (\FALSE !== $this->simple_query('USE ' . $this->escape_identifiers($database))) == false (line 206)

    $actual = $this->cI_DB_pdo_mysql_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select1()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == false (line 201)
    // if (\FALSE !== $this->simple_query('USE ' . $this->escape_identifiers($database))) == true (line 206)

    $actual = $this->cI_DB_pdo_mysql_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select2()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == true (line 201)
    // if (\FALSE !== $this->simple_query('USE ' . $this->escape_identifiers($database))) == false (line 206)

    $actual = $this->cI_DB_pdo_mysql_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_select3()
{
    $database = m::mock('UntypedParameter_database_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($database === '') == true (line 201)
    // if (\FALSE !== $this->simple_query('USE ' . $this->escape_identifiers($database))) == true (line 206)

    $actual = $this->cI_DB_pdo_mysql_driver->db_select($database);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data0()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == false (line 312)
    // for (...) == false (line 319)

    $actual = $this->cI_DB_pdo_mysql_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data1()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == false (line 312)
    // for (...) == true (line 319)
    // for (...) == false (line 319)

    $actual = $this->cI_DB_pdo_mysql_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testField_data2()
{
    $table = m::mock('UntypedParameter_table_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (($query = $this->query('SHOW COLUMNS FROM ' . $this->protect_identifiers($table, \TRUE, \NULL, \FALSE))) === \FALSE) == true (line 312)

    $actual = $this->cI_DB_pdo_mysql_driver->field_data($table);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
