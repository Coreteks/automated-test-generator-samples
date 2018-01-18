<?php

namespace tests;

use CI_DB_pdo_driver;
use Mockery as m;

class CI_DB_pdo_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_DB_pdo_driver
*/
protected $cI_DB_pdo_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_DB_pdo_driver = new \CI_DB_pdo_driver($this->_params);
}

/**
 * @expectedException \Exception
 */
public function testDb_connect0()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent === \TRUE) == false (line 129)

    $actual = $this->cI_DB_pdo_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect1()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent === \TRUE) == false (line 129)
    // if ($this->db_debug && empty($this->failover)) == false (line 140)

    $actual = $this->cI_DB_pdo_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect2()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent === \TRUE) == false (line 129)
    // if ($this->db_debug && empty($this->failover)) == true (line 140)

    $actual = $this->cI_DB_pdo_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect3()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent === \TRUE) == false (line 129)

    $actual = $this->cI_DB_pdo_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testDb_connect4()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent === \TRUE) == true (line 129)

    $actual = $this->cI_DB_pdo_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect5()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent === \TRUE) == true (line 129)
    // if ($this->db_debug && empty($this->failover)) == false (line 140)

    $actual = $this->cI_DB_pdo_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect6()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent === \TRUE) == true (line 129)
    // if ($this->db_debug && empty($this->failover)) == true (line 140)

    $actual = $this->cI_DB_pdo_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDb_connect7()
{
    $persistent = m::mock('UntypedParameter_persistent_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($persistent === \TRUE) == true (line 129)

    $actual = $this->cI_DB_pdo_driver->db_connect($persistent);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testVersion0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 158)

    $actual = $this->cI_DB_pdo_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 158)

    $actual = $this->cI_DB_pdo_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == false (line 158)

    $actual = $this->cI_DB_pdo_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testVersion3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->data_cache['version'])) == true (line 158)

    $actual = $this->cI_DB_pdo_driver->version();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAffected_rows0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_DB_pdo_driver->affected_rows();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInsert_id0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->cI_DB_pdo_driver->insert_id($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pdo_error[0])) == false (line 297)
    // if (isset($pdo_error[2])) == false (line 303)

    $actual = $this->cI_DB_pdo_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pdo_error[0])) == false (line 297)
    // if (isset($pdo_error[2])) == true (line 303)

    $actual = $this->cI_DB_pdo_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testError2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($pdo_error[0])) == true (line 297)

    $actual = $this->cI_DB_pdo_driver->error();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
