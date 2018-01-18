<?php

namespace tests;

use CI_Session_files_driver;
use Mockery as m;

class CI_Session_files_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_Session_files_driver
*/
protected $cI_Session_files_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_Session_files_driver = new \CI_Session_files_driver($this->_params);
}

public function testOpen0()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_dir($save_path)) == false (line 134)
    // if (!\is_writable($save_path)) == false (line 141)

    $actual = $this->cI_Session_files_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testOpen1()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_dir($save_path)) == false (line 134)
    // if (!\is_writable($save_path)) == true (line 141)
    // throw new \Exception("Session: Configured save path '" . $this->_config['save_path'] . "' is not writable by the PHP process.") -> exception (line 143)

    $actual = $this->cI_Session_files_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen2()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_dir($save_path)) == true (line 134)
    // if (!\mkdir($save_path, 0700, \TRUE)) == false (line 136)

    $actual = $this->cI_Session_files_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testOpen3()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_dir($save_path)) == true (line 134)
    // if (!\mkdir($save_path, 0700, \TRUE)) == true (line 136)
    // throw new \Exception("Session: Configured save path '" . $this->_config['save_path'] . "' is not a directory, doesn't exist or cannot be created.") -> exception (line 138)

    $actual = $this->cI_Session_files_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead0()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_file_handle === \NULL) == false (line 168)
    // if ($this->_file_handle === \FALSE) == false (line 198)
    // for (...) == false (line 208)

    $actual = $this->cI_Session_files_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead1()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_file_handle === \NULL) == false (line 168)
    // if ($this->_file_handle === \FALSE) == false (line 198)
    // for (...) == true (line 208)
    // if (($buffer = \fread($this->_file_handle, $length - $read)) === \FALSE) == false (line 210)
    // for (...) == false (line 208)

    $actual = $this->cI_Session_files_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead2()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_file_handle === \NULL) == false (line 168)
    // if ($this->_file_handle === \FALSE) == false (line 198)
    // for (...) == true (line 208)
    // if (($buffer = \fread($this->_file_handle, $length - $read)) === \FALSE) == true (line 210)

    $actual = $this->cI_Session_files_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead3()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_file_handle === \NULL) == false (line 168)
    // if ($this->_file_handle === \FALSE) == true (line 198)

    $actual = $this->cI_Session_files_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead4()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_file_handle === \NULL) == true (line 168)
    // if (($this->_file_handle = \fopen($this->_file_path . $session_id, 'c+b')) === \FALSE) == false (line 172)
    // if (\flock($this->_file_handle, \LOCK_EX) === \FALSE) == false (line 178)
    // if ($this->_file_new) == false (line 189)
    // for (...) == false (line 208)

    $actual = $this->cI_Session_files_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead5()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_file_handle === \NULL) == true (line 168)
    // if (($this->_file_handle = \fopen($this->_file_path . $session_id, 'c+b')) === \FALSE) == false (line 172)
    // if (\flock($this->_file_handle, \LOCK_EX) === \FALSE) == false (line 178)
    // if ($this->_file_new) == false (line 189)
    // for (...) == true (line 208)
    // if (($buffer = \fread($this->_file_handle, $length - $read)) === \FALSE) == false (line 210)
    // for (...) == false (line 208)

    $actual = $this->cI_Session_files_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead6()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_file_handle === \NULL) == true (line 168)
    // if (($this->_file_handle = \fopen($this->_file_path . $session_id, 'c+b')) === \FALSE) == false (line 172)
    // if (\flock($this->_file_handle, \LOCK_EX) === \FALSE) == false (line 178)
    // if ($this->_file_new) == false (line 189)
    // for (...) == true (line 208)
    // if (($buffer = \fread($this->_file_handle, $length - $read)) === \FALSE) == true (line 210)

    $actual = $this->cI_Session_files_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead7()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_file_handle === \NULL) == true (line 168)
    // if (($this->_file_handle = \fopen($this->_file_path . $session_id, 'c+b')) === \FALSE) == false (line 172)
    // if (\flock($this->_file_handle, \LOCK_EX) === \FALSE) == false (line 178)
    // if ($this->_file_new) == true (line 189)

    $actual = $this->cI_Session_files_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead8()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_file_handle === \NULL) == true (line 168)
    // if (($this->_file_handle = \fopen($this->_file_path . $session_id, 'c+b')) === \FALSE) == false (line 172)
    // if (\flock($this->_file_handle, \LOCK_EX) === \FALSE) == true (line 178)

    $actual = $this->cI_Session_files_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead9()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_file_handle === \NULL) == true (line 168)
    // if (($this->_file_handle = \fopen($this->_file_path . $session_id, 'c+b')) === \FALSE) == true (line 172)

    $actual = $this->cI_Session_files_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == false (line 253)
    // if (($length = \strlen($session_data)) > 0) == false (line 259)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite1()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == false (line 253)
    // if (($length = \strlen($session_data)) > 0) == true (line 259)
    // for (...) == false (line 261)
    // if (!\is_int($result)) == false (line 269)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite2()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == false (line 253)
    // if (($length = \strlen($session_data)) > 0) == true (line 259)
    // for (...) == false (line 261)
    // if (!\is_int($result)) == true (line 269)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite3()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == false (line 253)
    // if (($length = \strlen($session_data)) > 0) == true (line 259)
    // for (...) == true (line 261)
    // if (($result = \fwrite($this->_file_handle, \substr($session_data, $written))) === \FALSE) == false (line 263)
    // for (...) == false (line 261)
    // if (!\is_int($result)) == false (line 269)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite4()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == false (line 253)
    // if (($length = \strlen($session_data)) > 0) == true (line 259)
    // for (...) == true (line 261)
    // if (($result = \fwrite($this->_file_handle, \substr($session_data, $written))) === \FALSE) == false (line 263)
    // for (...) == false (line 261)
    // if (!\is_int($result)) == true (line 269)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite5()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == false (line 253)
    // if (($length = \strlen($session_data)) > 0) == true (line 259)
    // for (...) == true (line 261)
    // if (($result = \fwrite($this->_file_handle, \substr($session_data, $written))) === \FALSE) == true (line 263)
    // if (!\is_int($result)) == false (line 269)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite6()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == false (line 253)
    // if (($length = \strlen($session_data)) > 0) == true (line 259)
    // for (...) == true (line 261)
    // if (($result = \fwrite($this->_file_handle, \substr($session_data, $written))) === \FALSE) == true (line 263)
    // if (!\is_int($result)) == true (line 269)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite7()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == true (line 253)
    // if (($length = \strlen($session_data)) > 0) == false (line 259)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite8()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == true (line 253)
    // if (($length = \strlen($session_data)) > 0) == true (line 259)
    // for (...) == false (line 261)
    // if (!\is_int($result)) == false (line 269)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite9()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == true (line 253)
    // if (($length = \strlen($session_data)) > 0) == true (line 259)
    // for (...) == false (line 261)
    // if (!\is_int($result)) == true (line 269)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite10()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == true (line 253)
    // if (($length = \strlen($session_data)) > 0) == true (line 259)
    // for (...) == true (line 261)
    // if (($result = \fwrite($this->_file_handle, \substr($session_data, $written))) === \FALSE) == false (line 263)
    // for (...) == false (line 261)
    // if (!\is_int($result)) == false (line 269)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite11()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == true (line 253)
    // if (($length = \strlen($session_data)) > 0) == true (line 259)
    // for (...) == true (line 261)
    // if (($result = \fwrite($this->_file_handle, \substr($session_data, $written))) === \FALSE) == false (line 263)
    // for (...) == false (line 261)
    // if (!\is_int($result)) == true (line 269)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite12()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == true (line 253)
    // if (($length = \strlen($session_data)) > 0) == true (line 259)
    // for (...) == true (line 261)
    // if (($result = \fwrite($this->_file_handle, \substr($session_data, $written))) === \FALSE) == true (line 263)
    // if (!\is_int($result)) == false (line 269)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite13()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == false (line 246)
    // if (!$this->_file_new) == true (line 253)
    // if (($length = \strlen($session_data)) > 0) == true (line 259)
    // for (...) == true (line 261)
    // if (($result = \fwrite($this->_file_handle, \substr($session_data, $written))) === \FALSE) == true (line 263)
    // if (!\is_int($result)) == true (line 269)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite14()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == false (line 242)
    // if ($this->_fingerprint === \md5($session_data)) == true (line 246)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite15()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == false (line 237)
    // if (!\is_resource($this->_file_handle)) == true (line 242)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite16()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($session_id !== $this->_session_id && ($this->close() === $this->_failure or $this->read($session_id) === $this->_failure)) == true (line 237)

    $actual = $this->cI_Session_files_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->_file_handle)) == false (line 292)

    $actual = $this->cI_Session_files_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_resource($this->_file_handle)) == true (line 292)

    $actual = $this->cI_Session_files_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy0()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->close() === $this->_success) == false (line 315)
    // if ($this->_file_path !== \NULL) == false (line 327)

    $actual = $this->cI_Session_files_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy1()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->close() === $this->_success) == false (line 315)
    // if ($this->_file_path !== \NULL) == true (line 327)
    // if (\file_exists($this->_file_path . $session_id)) == false (line 330)

    $actual = $this->cI_Session_files_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy2()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->close() === $this->_success) == false (line 315)
    // if ($this->_file_path !== \NULL) == true (line 327)
    // if (\file_exists($this->_file_path . $session_id)) == true (line 330)

    $actual = $this->cI_Session_files_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy3()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->close() === $this->_success) == true (line 315)
    // if (\file_exists($this->_file_path . $session_id)) == false (line 317)

    $actual = $this->cI_Session_files_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy4()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->close() === $this->_success) == true (line 315)
    // if (\file_exists($this->_file_path . $session_id)) == true (line 317)

    $actual = $this->cI_Session_files_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc0()
{
    $maxlifetime = m::mock('UntypedParameter_maxlifetime_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_dir($this->_config['save_path']) or ($directory = \opendir($this->_config['save_path'])) === \FALSE) == false (line 356)
    // while (($file = \readdir($directory)) !== \FALSE) == false (line 373)

    $actual = $this->cI_Session_files_driver->gc($maxlifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc1()
{
    $maxlifetime = m::mock('UntypedParameter_maxlifetime_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_dir($this->_config['save_path']) or ($directory = \opendir($this->_config['save_path'])) === \FALSE) == false (line 356)
    // while (($file = \readdir($directory)) !== \FALSE) == true (line 373)
    // if (!\preg_match($pattern, $file) or !\is_file($this->_config['save_path'] . \DIRECTORY_SEPARATOR . $file) or ($mtime = \filemtime($this->_config['save_path'] . \DIRECTORY_SEPARATOR . $file)) === \FALSE or $mtime > $ts) == false (line 376)
    // while (($file = \readdir($directory)) !== \FALSE) == false (line 373)

    $actual = $this->cI_Session_files_driver->gc($maxlifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc2()
{
    $maxlifetime = m::mock('UntypedParameter_maxlifetime_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_dir($this->_config['save_path']) or ($directory = \opendir($this->_config['save_path'])) === \FALSE) == false (line 356)
    // while (($file = \readdir($directory)) !== \FALSE) == true (line 373)
    // if (!\preg_match($pattern, $file) or !\is_file($this->_config['save_path'] . \DIRECTORY_SEPARATOR . $file) or ($mtime = \filemtime($this->_config['save_path'] . \DIRECTORY_SEPARATOR . $file)) === \FALSE or $mtime > $ts) == true (line 376)
    // while (($file = \readdir($directory)) !== \FALSE) == false (line 373)

    $actual = $this->cI_Session_files_driver->gc($maxlifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc3()
{
    $maxlifetime = m::mock('UntypedParameter_maxlifetime_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_dir($this->_config['save_path']) or ($directory = \opendir($this->_config['save_path'])) === \FALSE) == true (line 356)

    $actual = $this->cI_Session_files_driver->gc($maxlifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
