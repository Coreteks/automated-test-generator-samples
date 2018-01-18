<?php

namespace tests;

use Mockery as m;
use Requests_Hooks;

class Requests_HooksTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Requests_Hooks
*/
protected $requests_Hooks;

public function setUp()
{
    parent::setUp();

    $this->requests_Hooks = new \Requests_Hooks();
}

public function testRegister0()
{
    $hook = m::mock('UntypedParameter_hook_');
    $callback = m::mock('UntypedParameter_callback_');
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->hooks[$hook])) == false (line 38)
    // if (!isset($this->hooks[$hook][$priority])) == false (line 41)

    $actual = $this->requests_Hooks->register($hook, $callback, $priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    $hook = m::mock('UntypedParameter_hook_');
    $callback = m::mock('UntypedParameter_callback_');
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->hooks[$hook])) == false (line 38)
    // if (!isset($this->hooks[$hook][$priority])) == true (line 41)

    $actual = $this->requests_Hooks->register($hook, $callback, $priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister2()
{
    $hook = m::mock('UntypedParameter_hook_');
    $callback = m::mock('UntypedParameter_callback_');
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->hooks[$hook])) == true (line 38)
    // if (!isset($this->hooks[$hook][$priority])) == false (line 41)

    $actual = $this->requests_Hooks->register($hook, $callback, $priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister3()
{
    $hook = m::mock('UntypedParameter_hook_');
    $callback = m::mock('UntypedParameter_callback_');
    $priority = m::mock('UntypedParameter_priority_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->hooks[$hook])) == true (line 38)
    // if (!isset($this->hooks[$hook][$priority])) == true (line 41)

    $actual = $this->requests_Hooks->register($hook, $callback, $priority);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch0()
{
    $hook = m::mock('UntypedParameter_hook_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->hooks[$hook])) == false (line 56)

    $actual = $this->requests_Hooks->dispatch($hook, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch1()
{
    $hook = m::mock('UntypedParameter_hook_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->hooks[$hook])) == false (line 56)

    $actual = $this->requests_Hooks->dispatch($hook, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch2()
{
    $hook = m::mock('UntypedParameter_hook_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->hooks[$hook])) == false (line 56)

    $actual = $this->requests_Hooks->dispatch($hook, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch3()
{
    $hook = m::mock('UntypedParameter_hook_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->hooks[$hook])) == true (line 56)

    $actual = $this->requests_Hooks->dispatch($hook, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
