<?php

namespace tests\GuzzleHttp;

use GuzzleHttp\HandlerStack;
use Mockery as m;

class HandlerStackTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_handler = null;
/**
* @var \GuzzleHttp\HandlerStack
*/
protected $handlerStack;

public function setUp()
{
    parent::setUp();

    $this->_handler = null;
    $this->handlerStack = new \GuzzleHttp\HandlerStack($this->_handler);
}

public function testCreate0()
{
    $handler = m::mock('UntypedParameter_handler_');

    // TODO: Your mock expectations here

    $actual = $this->handlerStack->create($handler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__invoke0()
{
    $request = m::mock(\Psr\Http\Message\RequestInterface::class);
    $options = [];

    // TODO: Your mock expectations here

    $actual = $this->handlerStack->__invoke($request, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler) == false (line 79)

    $actual = $this->handlerStack->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler) == false (line 79)

    $actual = $this->handlerStack->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler) == false (line 79)

    $actual = $this->handlerStack->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler) == false (line 79)

    $actual = $this->handlerStack->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString4()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler) == true (line 79)

    $actual = $this->handlerStack->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString5()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler) == true (line 79)

    $actual = $this->handlerStack->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString6()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler) == true (line 79)

    $actual = $this->handlerStack->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__toString7()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->handler) == true (line 79)

    $actual = $this->handlerStack->__toString();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSetHandler0()
{
    $handler = m::mock('UntypedParameter_handler_');

    // TODO: Your mock expectations here

    $actual = $this->handlerStack->setHandler($handler);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHasHandler0()
{
    // TODO: Your mock expectations here

    $actual = $this->handlerStack->hasHandler();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testUnshift0()
{
    $middleware = m::mock('UntypedParameter_middleware_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->handlerStack->unshift($middleware, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPush0()
{
    $middleware = m::mock('UntypedParameter_middleware_');
    $name = m::mock('UntypedParameter_name_');

    // TODO: Your mock expectations here

    $actual = $this->handlerStack->push($middleware, $name);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBefore0()
{
    $findName = m::mock('UntypedParameter_findName_');
    $middleware = m::mock('UntypedParameter_middleware_');
    $withName = m::mock('UntypedParameter_withName_');

    // TODO: Your mock expectations here

    $actual = $this->handlerStack->before($findName, $middleware, $withName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfter0()
{
    $findName = m::mock('UntypedParameter_findName_');
    $middleware = m::mock('UntypedParameter_middleware_');
    $withName = m::mock('UntypedParameter_withName_');

    // TODO: Your mock expectations here

    $actual = $this->handlerStack->after($findName, $middleware, $withName);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove0()
{
    $remove = m::mock('UntypedParameter_remove_');

    // TODO: Your mock expectations here

    $actual = $this->handlerStack->remove($remove);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->cached) == false (line 193)

    $actual = $this->handlerStack->resolve();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->cached) == true (line 193)
    // if (!($prev = $this->handler)) == false (line 194)

    $actual = $this->handlerStack->resolve();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testResolve2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->cached) == true (line 193)
    // if (!($prev = $this->handler)) == false (line 194)

    $actual = $this->handlerStack->resolve();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \LogicException
 */
public function testResolve3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->cached) == true (line 193)
    // if (!($prev = $this->handler)) == true (line 194)
    // throw new \LogicException('No handler has been specified') -> exception (line 195)

    $actual = $this->handlerStack->resolve();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
