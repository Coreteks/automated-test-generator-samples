<?php

namespace tests\Illuminate\Session;

use Illuminate\Session\Store;
use Mockery as m;
use SessionHandlerInterface;

class StoreTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_name = null;
/**
* @var \Mockery\MockInterface
*/
protected $_handler;
/**
* @var mixed
*/
protected $_id = null;
/**
* @var \Illuminate\Session\Store
*/
protected $store;

public function setUp()
{
    parent::setUp();

    $this->_name = null;
    $this->_handler = m::mock(\SessionHandlerInterface::class);
    $this->_id = null;
    $this->store = new \Illuminate\Session\Store($this->_name, $this->_handler, $this->_id);
}

public function testStart0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->has('_token')) == false (line 72)

    $actual = $this->store->start();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testStart1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->has('_token')) == true (line 72)

    $actual = $this->store->start();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSave0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->save();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAgeFlashData0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->ageFlashData();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAll0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->all();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExists0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->store->exists($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->store->has($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->store->get($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPull0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->store->pull($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasOldInput0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->store->hasOldInput($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetOldInput0()
{
    $key = m::mock('UntypedParameter_key_');
    $default = m::mock('UntypedParameter_default_');

    // TODO: Your mock expectations here

    $actual = $this->store->getOldInput($key, $default);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReplace0()
{
    $attributes = [];

    // TODO: Your mock expectations here

    $actual = $this->store->replace($attributes);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($key)) == false (line 264)

    $actual = $this->store->put($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut1()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($key)) == false (line 264)

    $actual = $this->store->put($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut2()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($key)) == true (line 264)

    $actual = $this->store->put($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPut3()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_array($key)) == true (line 264)

    $actual = $this->store->put($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemember0()
{
    $key = m::mock('UntypedParameter_key_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($value = $this->get($key))) == false (line 282)

    $actual = $this->store->remember($key, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemember1()
{
    $key = m::mock('UntypedParameter_key_');
    $callback = m::mock(\Closure::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!is_null($value = $this->get($key))) == true (line 282)

    $actual = $this->store->remember($key, $callback);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->store->push($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIncrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $amount = m::mock('UntypedParameter_amount_');

    // TODO: Your mock expectations here

    $actual = $this->store->increment($key, $amount);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDecrement0()
{
    $key = m::mock('UntypedParameter_key_');
    $amount = m::mock('UntypedParameter_amount_');

    // TODO: Your mock expectations here

    $actual = $this->store->decrement($key, $amount);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlash0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->store->flash($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testNow0()
{
    $key = m::mock('UntypedParameter_key_');
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->store->now($key, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReflash0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->reflash();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testKeep0()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->store->keep($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlashInput0()
{
    $value = [];

    // TODO: Your mock expectations here

    $actual = $this->store->flashInput($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove0()
{
    $key = m::mock('UntypedParameter_key_');

    // TODO: Your mock expectations here

    $actual = $this->store->remove($key);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testForget0()
{
    $keys = m::mock('UntypedParameter_keys_');

    // TODO: Your mock expectations here

    $actual = $this->store->forget($keys);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFlush0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->flush();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInvalidate0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->invalidate();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegenerate0()
{
    $destroy = m::mock('UntypedParameter_destroy_');

    // TODO: Your mock expectations here

    $actual = $this->store->regenerate($destroy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMigrate0()
{
    $destroy = m::mock('UntypedParameter_destroy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($destroy) == false (line 486)

    $actual = $this->store->migrate($destroy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testMigrate1()
{
    $destroy = m::mock('UntypedParameter_destroy_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($destroy) == true (line 486)

    $actual = $this->store->migrate($destroy);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsStarted0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->isStarted();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetName0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->getName();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetName0()
{
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->store->setName($name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetId0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->getId();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetId0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->store->setId($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsValidId0()
{
    $id = m::mock('UntypedParameter_id_');

    // TODO: Your mock expectations here

    $actual = $this->store->isValidId($id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetExists0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler instanceof \Illuminate\Session\ExistenceAwareInterface) == false (line 578)

    $actual = $this->store->setExists($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetExists1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler instanceof \Illuminate\Session\ExistenceAwareInterface) == true (line 578)

    $actual = $this->store->setExists($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testToken0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->token();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegenerateToken0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->regenerateToken();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPreviousUrl0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->previousUrl();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetPreviousUrl0()
{
    $url = m::mock('UntypedParameter_url_');

    // TODO: Your mock expectations here

    $actual = $this->store->setPreviousUrl($url);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetHandler0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->getHandler();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHandlerNeedsRequest0()
{
    // TODO: Your mock expectations here

    $actual = $this->store->handlerNeedsRequest();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRequestOnHandler0()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handlerNeedsRequest()) == false (line 652)

    $actual = $this->store->setRequestOnHandler($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetRequestOnHandler1()
{
    $request = m::mock('UntypedParameter_request_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handlerNeedsRequest()) == true (line 652)

    $actual = $this->store->setRequestOnHandler($request);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
