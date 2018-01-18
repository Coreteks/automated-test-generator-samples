<?php

namespace tests;

use CI_Cache_redis;
use Mockery as m;

class CI_Cache_redisTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \CI_Cache_redis
*/
protected $cI_Cache_redis;

public function setUp()
{
    parent::setUp();

    $this->cI_Cache_redis = new \CI_Cache_redis();
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['__ci_type'], $data['__ci_value']) or $data['__ci_value'] === \FALSE) == false (line 141)
    // switch ($data['__ci_type']) (line 146)
    // Case 'array' == false (line 148)
    // Case 'object' == false (line 149)
    // Case 'boolean' == false (line 151)
    // Case 'integer' == false (line 152)
    // Case 'double' == false (line 153)
    // Case 'string' == false (line 154)
    // Case 'NULL' == false (line 155)
    // Case 'resource' == false (line 159)
    // Default (line 160)

    $actual = $this->cI_Cache_redis->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['__ci_type'], $data['__ci_value']) or $data['__ci_value'] === \FALSE) == false (line 141)
    // switch ($data['__ci_type']) (line 146)
    // Case 'array' == false (line 148)
    // Case 'object' == false (line 149)
    // Case 'boolean' == false (line 151)
    // Case 'integer' == false (line 152)
    // Case 'double' == false (line 153)
    // Case 'string' == false (line 154)
    // Case 'NULL' == false (line 155)
    // Case 'resource' == true (line 159)

    $actual = $this->cI_Cache_redis->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet2()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['__ci_type'], $data['__ci_value']) or $data['__ci_value'] === \FALSE) == false (line 141)
    // switch ($data['__ci_type']) (line 146)
    // Case 'array' == false (line 148)
    // Case 'object' == false (line 149)
    // Case 'boolean' == false (line 151)
    // Case 'integer' == false (line 152)
    // Case 'double' == false (line 153)
    // Case 'string' == false (line 154)
    // Case 'NULL' == true (line 155)

    $actual = $this->cI_Cache_redis->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet3()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['__ci_type'], $data['__ci_value']) or $data['__ci_value'] === \FALSE) == false (line 141)
    // switch ($data['__ci_type']) (line 146)
    // Case 'array' == false (line 148)
    // Case 'object' == false (line 149)
    // Case 'boolean' == false (line 151)
    // Case 'integer' == false (line 152)
    // Case 'double' == false (line 153)
    // Case 'string' == true (line 154)

    $actual = $this->cI_Cache_redis->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet4()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['__ci_type'], $data['__ci_value']) or $data['__ci_value'] === \FALSE) == false (line 141)
    // switch ($data['__ci_type']) (line 146)
    // Case 'array' == false (line 148)
    // Case 'object' == false (line 149)
    // Case 'boolean' == false (line 151)
    // Case 'integer' == false (line 152)
    // Case 'double' == true (line 153)

    $actual = $this->cI_Cache_redis->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet5()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['__ci_type'], $data['__ci_value']) or $data['__ci_value'] === \FALSE) == false (line 141)
    // switch ($data['__ci_type']) (line 146)
    // Case 'array' == false (line 148)
    // Case 'object' == false (line 149)
    // Case 'boolean' == false (line 151)
    // Case 'integer' == true (line 152)

    $actual = $this->cI_Cache_redis->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet6()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['__ci_type'], $data['__ci_value']) or $data['__ci_value'] === \FALSE) == false (line 141)
    // switch ($data['__ci_type']) (line 146)
    // Case 'array' == false (line 148)
    // Case 'object' == false (line 149)
    // Case 'boolean' == true (line 151)

    $actual = $this->cI_Cache_redis->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet7()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['__ci_type'], $data['__ci_value']) or $data['__ci_value'] === \FALSE) == false (line 141)
    // switch ($data['__ci_type']) (line 146)
    // Case 'array' == false (line 148)
    // Case 'object' == true (line 149)

    $actual = $this->cI_Cache_redis->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet8()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['__ci_type'], $data['__ci_value']) or $data['__ci_value'] === \FALSE) == false (line 141)
    // switch ($data['__ci_type']) (line 146)
    // Case 'array' == true (line 148)

    $actual = $this->cI_Cache_redis->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet9()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($data['__ci_type'], $data['__ci_value']) or $data['__ci_value'] === \FALSE) == true (line 141)

    $actual = $this->cI_Cache_redis->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave0()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == false (line 185)
    // Case 'double' == false (line 186)
    // Case 'string' == false (line 187)
    // Case 'NULL' == false (line 188)
    // Case 'resource' == false (line 190)
    // Default (line 191)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave1()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == false (line 185)
    // Case 'double' == false (line 186)
    // Case 'string' == false (line 187)
    // Case 'NULL' == false (line 188)
    // Case 'resource' == true (line 190)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave2()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == false (line 185)
    // Case 'double' == false (line 186)
    // Case 'string' == false (line 187)
    // Case 'NULL' == true (line 188)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == false (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave3()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == false (line 185)
    // Case 'double' == false (line 186)
    // Case 'string' == false (line 187)
    // Case 'NULL' == true (line 188)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == true (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave4()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == false (line 185)
    // Case 'double' == false (line 186)
    // Case 'string' == false (line 187)
    // Case 'NULL' == true (line 188)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == true (line 195)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave5()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == false (line 185)
    // Case 'double' == false (line 186)
    // Case 'string' == true (line 187)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == false (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave6()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == false (line 185)
    // Case 'double' == false (line 186)
    // Case 'string' == true (line 187)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == true (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave7()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == false (line 185)
    // Case 'double' == false (line 186)
    // Case 'string' == true (line 187)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == true (line 195)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave8()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == false (line 185)
    // Case 'double' == true (line 186)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == false (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave9()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == false (line 185)
    // Case 'double' == true (line 186)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == true (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave10()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == false (line 185)
    // Case 'double' == true (line 186)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == true (line 195)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave11()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == true (line 185)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == false (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave12()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == true (line 185)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == true (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave13()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == false (line 184)
    // Case 'integer' == true (line 185)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == true (line 195)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave14()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == true (line 184)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == false (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave15()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == true (line 184)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == true (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave16()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == false (line 181)
    // Case 'boolean' == true (line 184)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == true (line 195)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave17()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == true (line 181)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == false (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave18()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == true (line 181)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == true (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave19()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == false (line 180)
    // Case 'object' == true (line 181)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == true (line 195)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave20()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == true (line 180)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == false (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave21()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == true (line 180)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == false (line 195)
    // if ($ttl) == true (line 199)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave22()
{
    $id = m::mock('UntypedParameter_id_');
    $data = m::mock('UntypedParameter_data_');
    $ttl = m::mock('UntypedParameter_ttl_');
    $raw = m::mock('UntypedParameter_raw_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($data_type = \gettype($data)) (line 178)
    // Case 'array' == true (line 180)
    // if (!$this->_redis->hMSet($id, array('__ci_type' => $data_type, '__ci_value' => $data))) == true (line 195)

    $actual = $this->cI_Cache_redis->save($id, $data, $ttl, $raw);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDelete0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_redis->delete($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_redis->increment($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $id = m::mock('UntypedParameter_id_');
    $offset = m::mock('UntypedParameter_offset_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_redis->decrement($id, $offset);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testClean0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_redis->clean();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCache_info0()
{
    $type = m::mock('UntypedParameter_type_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_redis->cache_info($type);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value !== \FALSE) == false (line 289)

    $actual = $this->cI_Cache_redis->get_metadata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_metadata1()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($value !== \FALSE) == true (line 289)

    $actual = $this->cI_Cache_redis->get_metadata($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_supported0()
{
    // TODO: Your mock expectations here

    $actual = $this->cI_Cache_redis->is_supported();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_redis) == false (line 323)

    $actual = $this->cI_Cache_redis->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__destruct1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->_redis) == true (line 323)

    $actual = $this->cI_Cache_redis->__destruct();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
