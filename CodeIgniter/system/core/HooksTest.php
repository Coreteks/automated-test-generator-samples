<?php

namespace tests;

use CI_Config;
use CI_Hooks;
use Mockery as m;

class CI_HooksTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_config;
/**
* @var \CI_Hooks
*/
protected $cI_Hooks;

public function setUp()
{
    parent::setUp();

    $this->_config = m::mock(\CI_Config::class);
    $this->cI_Hooks = new \CI_Hooks($this->_config);
}

public function testCall_hook0()
{
    $which = m::mock('UntypedParameter_which_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->enabled or !isset($this->hooks[$which])) == false (line 135)
    // if (\is_array($this->hooks[$which]) && !isset($this->hooks[$which]['function'])) == false (line 140)

    $actual = $this->cI_Hooks->call_hook($which);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall_hook1()
{
    $which = m::mock('UntypedParameter_which_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->enabled or !isset($this->hooks[$which])) == false (line 135)
    // if (\is_array($this->hooks[$which]) && !isset($this->hooks[$which]['function'])) == true (line 140)

    $actual = $this->cI_Hooks->call_hook($which);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall_hook2()
{
    $which = m::mock('UntypedParameter_which_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->enabled or !isset($this->hooks[$which])) == false (line 135)
    // if (\is_array($this->hooks[$which]) && !isset($this->hooks[$which]['function'])) == true (line 140)

    $actual = $this->cI_Hooks->call_hook($which);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCall_hook3()
{
    $which = m::mock('UntypedParameter_which_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$this->enabled or !isset($this->hooks[$which])) == true (line 135)

    $actual = $this->cI_Hooks->call_hook($which);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
