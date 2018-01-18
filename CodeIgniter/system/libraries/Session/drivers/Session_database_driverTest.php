<?php

namespace tests;

use CI_Session_database_driver;
use Mockery as m;

class CI_Session_database_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_Session_database_driver
*/
protected $cI_Session_database_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_Session_database_driver = new \CI_Session_database_driver($this->_params);
}

public function testOpen0()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->_db->conn_id) && !$this->_db->db_connect()) == false (line 131)

    $actual = $this->cI_Session_database_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen1()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->_db->conn_id) && !$this->_db->db_connect()) == true (line 131)

    $actual = $this->cI_Session_database_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead0()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_get_lock($session_id) !== \FALSE) == false (line 151)

    $actual = $this->cI_Session_database_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead1()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_get_lock($session_id) !== \FALSE) == true (line 151)
    // if ($this->_config['match_ip']) == false (line 164)
    // if (!($result = $this->_db->get()) or ($result = $result->row()) === \NULL) == false (line 169)

    $actual = $this->cI_Session_database_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead2()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_get_lock($session_id) !== \FALSE) == true (line 151)
    // if ($this->_config['match_ip']) == false (line 164)
    // if (!($result = $this->_db->get()) or ($result = $result->row()) === \NULL) == true (line 169)

    $actual = $this->cI_Session_database_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead3()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_get_lock($session_id) !== \FALSE) == true (line 151)
    // if ($this->_config['match_ip']) == true (line 164)
    // if (!($result = $this->_db->get()) or ($result = $result->row()) === \NULL) == false (line 169)

    $actual = $this->cI_Session_database_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead4()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_get_lock($session_id) !== \FALSE) == true (line 151)
    // if ($this->_config['match_ip']) == true (line 164)
    // if (!($result = $this->_db->get()) or ($result = $result->row()) === \NULL) == true (line 169)

    $actual = $this->cI_Session_database_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == false (line 212)
    // if ($this->_lock === \FALSE) == false (line 222)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == false (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == false (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == false (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite1()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == false (line 212)
    // if ($this->_lock === \FALSE) == false (line 222)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == false (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == false (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == true (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite2()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == false (line 212)
    // if ($this->_lock === \FALSE) == false (line 222)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == false (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == true (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == false (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite3()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == false (line 212)
    // if ($this->_lock === \FALSE) == false (line 222)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == false (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == true (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == true (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite4()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == false (line 212)
    // if ($this->_lock === \FALSE) == false (line 222)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == true (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == false (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == false (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite5()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == false (line 212)
    // if ($this->_lock === \FALSE) == false (line 222)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == true (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == false (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == true (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite6()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == false (line 212)
    // if ($this->_lock === \FALSE) == false (line 222)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == true (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == true (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == false (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite7()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == false (line 212)
    // if ($this->_lock === \FALSE) == false (line 222)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == true (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == true (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == true (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite8()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == false (line 212)
    // if ($this->_lock === \FALSE) == false (line 222)
    // if ($this->_row_exists === \FALSE) == true (line 227)
    // if ($this->_db->insert($this->_config['save_path'], $insert_data)) == false (line 236)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite9()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == false (line 212)
    // if ($this->_lock === \FALSE) == false (line 222)
    // if ($this->_row_exists === \FALSE) == true (line 227)
    // if ($this->_db->insert($this->_config['save_path'], $insert_data)) == true (line 236)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite10()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == false (line 212)
    // if ($this->_lock === \FALSE) == true (line 222)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite11()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == true (line 212)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 214)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == false (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == false (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == false (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite12()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == true (line 212)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 214)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == false (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == false (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == true (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite13()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == true (line 212)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 214)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == false (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == true (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == false (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite14()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == true (line 212)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 214)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == false (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == true (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == true (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite15()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == true (line 212)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 214)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == true (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == false (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == false (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite16()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == true (line 212)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 214)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == true (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == false (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == true (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite17()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == true (line 212)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 214)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == true (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == true (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == false (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite18()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == true (line 212)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 214)
    // if ($this->_row_exists === \FALSE) == false (line 227)
    // if ($this->_config['match_ip']) == true (line 247)
    // if ($this->_fingerprint !== \md5($session_data)) == true (line 253)
    // if ($this->_db->update($this->_config['save_path'], $update_data)) == true (line 260)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite19()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == true (line 212)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 214)
    // if ($this->_row_exists === \FALSE) == true (line 227)
    // if ($this->_db->insert($this->_config['save_path'], $insert_data)) == false (line 236)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite20()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == true (line 212)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 214)
    // if ($this->_row_exists === \FALSE) == true (line 227)
    // if ($this->_db->insert($this->_config['save_path'], $insert_data)) == true (line 236)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite21()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_session_id) && $session_id !== $this->_session_id) == true (line 212)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == true (line 214)

    $actual = $this->cI_Session_database_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Session_database_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy0()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_lock) == false (line 297)
    // if ($this->close() === $this->_success) == false (line 314)

    $actual = $this->cI_Session_database_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy1()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_lock) == false (line 297)
    // if ($this->close() === $this->_success) == true (line 314)

    $actual = $this->cI_Session_database_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy2()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_lock) == true (line 297)
    // if ($this->_config['match_ip']) == false (line 303)
    // if (!$this->_db->delete($this->_config['save_path'])) == false (line 308)
    // if ($this->close() === $this->_success) == false (line 314)

    $actual = $this->cI_Session_database_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy3()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_lock) == true (line 297)
    // if ($this->_config['match_ip']) == false (line 303)
    // if (!$this->_db->delete($this->_config['save_path'])) == false (line 308)
    // if ($this->close() === $this->_success) == true (line 314)

    $actual = $this->cI_Session_database_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy4()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_lock) == true (line 297)
    // if ($this->_config['match_ip']) == false (line 303)
    // if (!$this->_db->delete($this->_config['save_path'])) == true (line 308)

    $actual = $this->cI_Session_database_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy5()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_lock) == true (line 297)
    // if ($this->_config['match_ip']) == true (line 303)
    // if (!$this->_db->delete($this->_config['save_path'])) == false (line 308)
    // if ($this->close() === $this->_success) == false (line 314)

    $actual = $this->cI_Session_database_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy6()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_lock) == true (line 297)
    // if ($this->_config['match_ip']) == true (line 303)
    // if (!$this->_db->delete($this->_config['save_path'])) == false (line 308)
    // if ($this->close() === $this->_success) == true (line 314)

    $actual = $this->cI_Session_database_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy7()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_lock) == true (line 297)
    // if ($this->_config['match_ip']) == true (line 303)
    // if (!$this->_db->delete($this->_config['save_path'])) == true (line 308)

    $actual = $this->cI_Session_database_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc0()
{
    $maxlifetime = m::mock('UntypedParameter_maxlifetime_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Session_database_driver->gc($maxlifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
