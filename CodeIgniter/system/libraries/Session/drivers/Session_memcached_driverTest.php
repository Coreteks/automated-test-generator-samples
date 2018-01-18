<?php

namespace tests;

use CI_Session_memcached_driver;
use Mockery as m;

class CI_Session_memcached_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_Session_memcached_driver
*/
protected $cI_Session_memcached_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_Session_memcached_driver = new \CI_Session_memcached_driver($this->_params);
}

public function testOpen0()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (empty($server_list)) == false (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen1()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (empty($server_list)) == true (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen2()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (\in_array($match[1] . ':' . $match[2], $server_list, \TRUE)) == false (line 126)
    // if (!$this->_memcached->addServer($match[1], $match[2], isset($match[3]) ? $match[3] : 0)) == false (line 132)
    // if (empty($server_list)) == false (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen3()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (\in_array($match[1] . ':' . $match[2], $server_list, \TRUE)) == false (line 126)
    // if (!$this->_memcached->addServer($match[1], $match[2], isset($match[3]) ? $match[3] : 0)) == false (line 132)
    // if (empty($server_list)) == true (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen4()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (\in_array($match[1] . ':' . $match[2], $server_list, \TRUE)) == false (line 126)
    // if (!$this->_memcached->addServer($match[1], $match[2], isset($match[3]) ? $match[3] : 0)) == true (line 132)
    // if (empty($server_list)) == false (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen5()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (\in_array($match[1] . ':' . $match[2], $server_list, \TRUE)) == false (line 126)
    // if (!$this->_memcached->addServer($match[1], $match[2], isset($match[3]) ? $match[3] : 0)) == true (line 132)
    // if (empty($server_list)) == true (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen6()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (\in_array($match[1] . ':' . $match[2], $server_list, \TRUE)) == true (line 126)
    // if (empty($server_list)) == false (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen7()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (\in_array($match[1] . ':' . $match[2], $server_list, \TRUE)) == true (line 126)
    // if (empty($server_list)) == true (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen8()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == true (line 116)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen9()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (empty($server_list)) == false (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen10()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (empty($server_list)) == true (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen11()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (\in_array($match[1] . ':' . $match[2], $server_list, \TRUE)) == false (line 126)
    // if (!$this->_memcached->addServer($match[1], $match[2], isset($match[3]) ? $match[3] : 0)) == false (line 132)
    // if (empty($server_list)) == false (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen12()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (\in_array($match[1] . ':' . $match[2], $server_list, \TRUE)) == false (line 126)
    // if (!$this->_memcached->addServer($match[1], $match[2], isset($match[3]) ? $match[3] : 0)) == false (line 132)
    // if (empty($server_list)) == true (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen13()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (\in_array($match[1] . ':' . $match[2], $server_list, \TRUE)) == false (line 126)
    // if (!$this->_memcached->addServer($match[1], $match[2], isset($match[3]) ? $match[3] : 0)) == true (line 132)
    // if (empty($server_list)) == false (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen14()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (\in_array($match[1] . ':' . $match[2], $server_list, \TRUE)) == false (line 126)
    // if (!$this->_memcached->addServer($match[1], $match[2], isset($match[3]) ? $match[3] : 0)) == true (line 132)
    // if (empty($server_list)) == true (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen15()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (\in_array($match[1] . ':' . $match[2], $server_list, \TRUE)) == true (line 126)
    // if (empty($server_list)) == false (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen16()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == false (line 116)
    // if (\in_array($match[1] . ':' . $match[2], $server_list, \TRUE)) == true (line 126)
    // if (empty($server_list)) == true (line 142)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen17()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\preg_match_all('#,?([^,:]+)\\:(\\d{1,5})(?:\\:(\\d+))?#', $this->_config['save_path'], $matches, \PREG_SET_ORDER)) == true (line 116)

    $actual = $this->cI_Session_memcached_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead0()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_memcached) && $this->_get_lock($session_id)) == false (line 163)

    $actual = $this->cI_Session_memcached_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead1()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_memcached) && $this->_get_lock($session_id)) == true (line 163)

    $actual = $this->cI_Session_memcached_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_memcached, $this->_lock_key)) == false (line 189)
    // if ($session_id !== $this->_session_id) == false (line 194)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data))) == false (line 208)
    // if ($this->_memcached->touch($key, $this->_config['expiration']) or $this->_memcached->getResultCode() === \Memcached::RES_NOTFOUND && $this->_memcached->set($key, $session_data, $this->_config['expiration'])) == false (line 218)

    $actual = $this->cI_Session_memcached_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite1()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_memcached, $this->_lock_key)) == false (line 189)
    // if ($session_id !== $this->_session_id) == false (line 194)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data))) == false (line 208)
    // if ($this->_memcached->touch($key, $this->_config['expiration']) or $this->_memcached->getResultCode() === \Memcached::RES_NOTFOUND && $this->_memcached->set($key, $session_data, $this->_config['expiration'])) == true (line 218)

    $actual = $this->cI_Session_memcached_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite2()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_memcached, $this->_lock_key)) == false (line 189)
    // if ($session_id !== $this->_session_id) == false (line 194)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data))) == true (line 208)
    // if ($this->_memcached->set($key, $session_data, $this->_config['expiration'])) == false (line 210)

    $actual = $this->cI_Session_memcached_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite3()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_memcached, $this->_lock_key)) == false (line 189)
    // if ($session_id !== $this->_session_id) == false (line 194)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data))) == true (line 208)
    // if ($this->_memcached->set($key, $session_data, $this->_config['expiration'])) == true (line 210)

    $actual = $this->cI_Session_memcached_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite4()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_memcached, $this->_lock_key)) == false (line 189)
    // if ($session_id !== $this->_session_id) == true (line 194)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 196)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data))) == false (line 208)
    // if ($this->_memcached->touch($key, $this->_config['expiration']) or $this->_memcached->getResultCode() === \Memcached::RES_NOTFOUND && $this->_memcached->set($key, $session_data, $this->_config['expiration'])) == false (line 218)

    $actual = $this->cI_Session_memcached_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite5()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_memcached, $this->_lock_key)) == false (line 189)
    // if ($session_id !== $this->_session_id) == true (line 194)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 196)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data))) == false (line 208)
    // if ($this->_memcached->touch($key, $this->_config['expiration']) or $this->_memcached->getResultCode() === \Memcached::RES_NOTFOUND && $this->_memcached->set($key, $session_data, $this->_config['expiration'])) == true (line 218)

    $actual = $this->cI_Session_memcached_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite6()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_memcached, $this->_lock_key)) == false (line 189)
    // if ($session_id !== $this->_session_id) == true (line 194)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 196)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data))) == true (line 208)
    // if ($this->_memcached->set($key, $session_data, $this->_config['expiration'])) == false (line 210)

    $actual = $this->cI_Session_memcached_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite7()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_memcached, $this->_lock_key)) == false (line 189)
    // if ($session_id !== $this->_session_id) == true (line 194)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 196)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data))) == true (line 208)
    // if ($this->_memcached->set($key, $session_data, $this->_config['expiration'])) == true (line 210)

    $actual = $this->cI_Session_memcached_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite8()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_memcached, $this->_lock_key)) == false (line 189)
    // if ($session_id !== $this->_session_id) == true (line 194)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == true (line 196)

    $actual = $this->cI_Session_memcached_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite9()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_memcached, $this->_lock_key)) == true (line 189)

    $actual = $this->cI_Session_memcached_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_memcached)) == false (line 240)

    $actual = $this->cI_Session_memcached_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_memcached)) == true (line 240)
    // if (!$this->_memcached->quit()) == false (line 243)

    $actual = $this->cI_Session_memcached_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_memcached)) == true (line 240)
    // if (!$this->_memcached->quit()) == true (line 243)

    $actual = $this->cI_Session_memcached_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy0()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_memcached, $this->_lock_key)) == false (line 267)

    $actual = $this->cI_Session_memcached_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy1()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_memcached, $this->_lock_key)) == true (line 267)

    $actual = $this->cI_Session_memcached_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc0()
{
    $maxlifetime = m::mock('UntypedParameter_maxlifetime_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Session_memcached_driver->gc($maxlifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
