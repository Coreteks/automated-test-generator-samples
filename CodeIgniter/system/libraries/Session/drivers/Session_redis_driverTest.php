<?php

namespace tests;

use CI_Session_redis_driver;
use Mockery as m;

class CI_Session_redis_driverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_params = null;
/**
* @var \CI_Session_redis_driver
*/
protected $cI_Session_redis_driver;

public function setUp()
{
    parent::setUp();

    $this->_params = null;
    $this->cI_Session_redis_driver = new \CI_Session_redis_driver($this->_params);
}

public function testOpen0()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->_config['save_path'])) == false (line 145)
    // if ($connected) == false (line 159)

    $actual = $this->cI_Session_redis_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen1()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->_config['save_path'])) == false (line 145)
    // if ($connected) == true (line 159)
    // if (isset($this->_config['save_path']['password']) && !$redis->auth($this->_config['save_path']['password'])) == false (line 161)
    // if (isset($this->_config['save_path']['database']) && !$redis->select($this->_config['save_path']['database'])) == false (line 165)

    $actual = $this->cI_Session_redis_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen2()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->_config['save_path'])) == false (line 145)
    // if ($connected) == true (line 159)
    // if (isset($this->_config['save_path']['password']) && !$redis->auth($this->_config['save_path']['password'])) == false (line 161)
    // if (isset($this->_config['save_path']['database']) && !$redis->select($this->_config['save_path']['database'])) == true (line 165)

    $actual = $this->cI_Session_redis_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen3()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->_config['save_path'])) == false (line 145)
    // if ($connected) == true (line 159)
    // if (isset($this->_config['save_path']['password']) && !$redis->auth($this->_config['save_path']['password'])) == true (line 161)

    $actual = $this->cI_Session_redis_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testOpen4()
{
    $save_path = m::mock('UntypedParameter_save_path_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->_config['save_path'])) == true (line 145)

    $actual = $this->cI_Session_redis_driver->open($save_path, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead0()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis) && $this->_get_lock($session_id)) == false (line 195)

    $actual = $this->cI_Session_redis_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRead1()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis) && $this->_get_lock($session_id)) == true (line 195)

    $actual = $this->cI_Session_redis_driver->read($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite0()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_redis, $this->_lock_key)) == false (line 226)
    // if ($session_id !== $this->_session_id) == false (line 231)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data)) or $this->_key_exists === \FALSE) == false (line 243)

    $actual = $this->cI_Session_redis_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite1()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_redis, $this->_lock_key)) == false (line 226)
    // if ($session_id !== $this->_session_id) == false (line 231)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data)) or $this->_key_exists === \FALSE) == true (line 243)
    // if ($this->_redis->set($this->_key_prefix . $session_id, $session_data, $this->_config['expiration'])) == false (line 245)

    $actual = $this->cI_Session_redis_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite2()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_redis, $this->_lock_key)) == false (line 226)
    // if ($session_id !== $this->_session_id) == false (line 231)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data)) or $this->_key_exists === \FALSE) == true (line 243)
    // if ($this->_redis->set($this->_key_prefix . $session_id, $session_data, $this->_config['expiration'])) == true (line 245)

    $actual = $this->cI_Session_redis_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite3()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_redis, $this->_lock_key)) == false (line 226)
    // if ($session_id !== $this->_session_id) == true (line 231)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 233)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data)) or $this->_key_exists === \FALSE) == false (line 243)

    $actual = $this->cI_Session_redis_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite4()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_redis, $this->_lock_key)) == false (line 226)
    // if ($session_id !== $this->_session_id) == true (line 231)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 233)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data)) or $this->_key_exists === \FALSE) == true (line 243)
    // if ($this->_redis->set($this->_key_prefix . $session_id, $session_data, $this->_config['expiration'])) == false (line 245)

    $actual = $this->cI_Session_redis_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite5()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_redis, $this->_lock_key)) == false (line 226)
    // if ($session_id !== $this->_session_id) == true (line 231)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == false (line 233)
    // if ($this->_fingerprint !== ($fingerprint = \md5($session_data)) or $this->_key_exists === \FALSE) == true (line 243)
    // if ($this->_redis->set($this->_key_prefix . $session_id, $session_data, $this->_config['expiration'])) == true (line 245)

    $actual = $this->cI_Session_redis_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite6()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_redis, $this->_lock_key)) == false (line 226)
    // if ($session_id !== $this->_session_id) == true (line 231)
    // if (!$this->_release_lock() or !$this->_get_lock($session_id)) == true (line 233)

    $actual = $this->cI_Session_redis_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testWrite7()
{
    $session_id = m::mock('UntypedParameter_session_id_');
    $session_data = m::mock('UntypedParameter_session_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->_redis, $this->_lock_key)) == true (line 226)

    $actual = $this->cI_Session_redis_driver->write($session_id, $session_data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis)) == false (line 271)

    $actual = $this->cI_Session_redis_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testClose1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis)) == true (line 271)
    // if ($this->_redis->ping() === '+PONG') -> exception (line 274)

    $actual = $this->cI_Session_redis_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis)) == true (line 271)
    // if ($this->_redis->ping() === '+PONG') -> exception (line 274)

    $actual = $this->cI_Session_redis_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis)) == true (line 271)
    // if ($this->_redis->ping() === '+PONG') == false (line 274)

    $actual = $this->cI_Session_redis_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testClose4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis)) == true (line 271)
    // if ($this->_redis->ping() === '+PONG') == true (line 274)

    $actual = $this->cI_Session_redis_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis)) == true (line 271)
    // if ($this->_redis->ping() === '+PONG') == true (line 274)

    $actual = $this->cI_Session_redis_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testClose6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis)) == true (line 271)
    // if ($this->_redis->ping() === '+PONG') == true (line 274)
    // if ($this->_redis->close() === \FALSE) -> exception (line 277)

    $actual = $this->cI_Session_redis_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis)) == true (line 271)
    // if ($this->_redis->ping() === '+PONG') == true (line 274)
    // if ($this->_redis->close() === \FALSE) -> exception (line 277)

    $actual = $this->cI_Session_redis_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose8()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis)) == true (line 271)
    // if ($this->_redis->ping() === '+PONG') == true (line 274)
    // if ($this->_redis->close() === \FALSE) == false (line 277)

    $actual = $this->cI_Session_redis_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Exception
 */
public function testClose9()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis)) == true (line 271)
    // if ($this->_redis->ping() === '+PONG') == true (line 274)
    // if ($this->_redis->close() === \FALSE) == true (line 277)

    $actual = $this->cI_Session_redis_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose10()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis)) == true (line 271)
    // if ($this->_redis->ping() === '+PONG') == true (line 274)
    // if ($this->_redis->close() === \FALSE) == true (line 277)

    $actual = $this->cI_Session_redis_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClose11()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis)) == true (line 271)
    // if ($this->_redis->ping() === '+PONG') == true (line 274)
    // if ($this->_redis->close() === \FALSE) == true (line 277)

    $actual = $this->cI_Session_redis_driver->close();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy0()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis, $this->_lock_key)) == false (line 307)

    $actual = $this->cI_Session_redis_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy1()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis, $this->_lock_key)) == true (line 307)
    // if (($result = $this->_redis->delete($this->_key_prefix . $session_id)) !== 1) == false (line 309)

    $actual = $this->cI_Session_redis_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDestroy2()
{
    $session_id = m::mock('UntypedParameter_session_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->_redis, $this->_lock_key)) == true (line 307)
    // if (($result = $this->_redis->delete($this->_key_prefix . $session_id)) !== 1) == true (line 309)

    $actual = $this->cI_Session_redis_driver->destroy($session_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGc0()
{
    $maxlifetime = m::mock('UntypedParameter_maxlifetime_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Session_redis_driver->gc($maxlifetime);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
