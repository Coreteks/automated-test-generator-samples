<?php

namespace tests\Illuminate\Redis\Connections;

use Illuminate\Redis\Connections\PhpRedisConnection;
use Mockery as m;

class PhpRedisConnectionTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_client = null;
/**
* @var \Illuminate\Redis\Connections\PhpRedisConnection
*/
protected $phpRedisConnection;

public function setUp()
{
    parent::setUp();

    $this->_client = null;
    $this->phpRedisConnection = new \Illuminate\Redis\Connections\PhpRedisConnection($this->_client);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->get($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMget0()
{
    $keys = [];

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->mget($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists0()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->exists($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');
    $expireResolution = m::mock('UntypedParameter_expireResolution_');
    $expireTTL = m::mock('UntypedParameter_expireTTL_');
    $flag = m::mock('UntypedParameter_flag_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->set($key, $value, $expireResolution, $expireTTL, $flag);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetnx0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->setnx($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHmget0()
{
    $key = m::mock('UntypedParameter_key_');
    $dictionary = m::mock('UntypedParameter_dictionary_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($dictionary) == 1) == false (line 105)

    $actual = $this->phpRedisConnection->hmget($key, $dictionary);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHmget1()
{
    $key = m::mock('UntypedParameter_key_');
    $dictionary = m::mock('UntypedParameter_dictionary_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($dictionary) == 1) == true (line 105)

    $actual = $this->phpRedisConnection->hmget($key, $dictionary);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHmset0()
{
    $key = m::mock('UntypedParameter_key_');
    $dictionary = m::mock('UntypedParameter_dictionary_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($dictionary) == 1) == false (line 121)

    $actual = $this->phpRedisConnection->hmset($key, $dictionary);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHmset1()
{
    $key = m::mock('UntypedParameter_key_');
    $dictionary = m::mock('UntypedParameter_dictionary_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (count($dictionary) == 1) == true (line 121)

    $actual = $this->phpRedisConnection->hmset($key, $dictionary);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHsetnx0()
{
    $hash = m::mock('UntypedParameter_hash_');
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->hsetnx($hash, $key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLrem0()
{
    $key = m::mock('UntypedParameter_key_');
    $count = m::mock('UntypedParameter_count_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->lrem($key, $count, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSpop0()
{
    $key = m::mock('UntypedParameter_key_');
    $count = m::mock('UntypedParameter_count_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->spop($key, $count);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testZadd0()
{
    $key = m::mock('UntypedParameter_key_');
    $dictionary = m::mock('UntypedParameter_dictionary_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array(end($dictionary))) == false (line 179)

    $actual = $this->phpRedisConnection->zadd($key, $dictionary);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testZadd1()
{
    $key = m::mock('UntypedParameter_key_');
    $dictionary = m::mock('UntypedParameter_dictionary_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array(end($dictionary))) == true (line 179)

    $actual = $this->phpRedisConnection->zadd($key, $dictionary);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testZadd2()
{
    $key = m::mock('UntypedParameter_key_');
    $dictionary = m::mock('UntypedParameter_dictionary_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (is_array(end($dictionary))) == true (line 179)

    $actual = $this->phpRedisConnection->zadd($key, $dictionary);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testZrangebyscore0()
{
    $key = m::mock('UntypedParameter_key_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['limit'])) == false (line 202)

    $actual = $this->phpRedisConnection->zrangebyscore($key, $min, $max, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testZrangebyscore1()
{
    $key = m::mock('UntypedParameter_key_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['limit'])) == true (line 202)

    $actual = $this->phpRedisConnection->zrangebyscore($key, $min, $max, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testZrevrangebyscore0()
{
    $key = m::mock('UntypedParameter_key_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['limit'])) == false (line 223)

    $actual = $this->phpRedisConnection->zrevrangebyscore($key, $min, $max, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testZrevrangebyscore1()
{
    $key = m::mock('UntypedParameter_key_');
    $min = m::mock('UntypedParameter_min_');
    $max = m::mock('UntypedParameter_max_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($options['limit'])) == true (line 223)

    $actual = $this->phpRedisConnection->zrevrangebyscore($key, $min, $max, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testZinterstore0()
{
    $output = m::mock('UntypedParameter_output_');
    $keys = m::mock('UntypedParameter_keys_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->zinterstore($output, $keys, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testZunionstore0()
{
    $output = m::mock('UntypedParameter_output_');
    $keys = m::mock('UntypedParameter_keys_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->zunionstore($output, $keys, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPipeline0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->pipeline($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransaction0()
{
    $callback = m::mock('UntypedParameter_callback_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->transaction($callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEvalsha0()
{
    $script = m::mock('UntypedParameter_script_');
    $numkeys = m::mock('UntypedParameter_numkeys_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->evalsha($script, $numkeys, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testEval0()
{
    $script = m::mock('UntypedParameter_script_');
    $numberOfKeys = m::mock('UntypedParameter_numberOfKeys_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->eval($script, $numberOfKeys, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSubscribe0()
{
    $channels = m::mock('UntypedParameter_channels_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->subscribe($channels, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPsubscribe0()
{
    $channels = m::mock('UntypedParameter_channels_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->psubscribe($channels, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateSubscription0()
{
    $channels = m::mock('UntypedParameter_channels_');
    $callback = m::mock(\Closure::class);
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->createSubscription($channels, $callback, $method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecuteRaw0()
{
    $parameters = [];

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->executeRaw($parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDisconnect0()
{
    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->disconnect();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call0()
{
    $method = m::mock('UntypedParameter_method_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    $actual = $this->phpRedisConnection->__call($method, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
