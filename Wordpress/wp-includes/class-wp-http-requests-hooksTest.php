<?php

namespace tests;

use Mockery as m;
use WP_HTTP_Requests_Hooks;

class WP_HTTP_Requests_HooksTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_url = null;
/**
* @var mixed
*/
protected $_request = null;
/**
* @var \WP_HTTP_Requests_Hooks
*/
protected $wP_HTTP_Requests_Hooks;

public function setUp()
{
    parent::setUp();

    $this->_url = null;
    $this->_request = null;
    $this->wP_HTTP_Requests_Hooks = new \WP_HTTP_Requests_Hooks($this->_url, $this->_request);
}

public function testDispatch0()
{
    $hook = m::mock('UntypedParameter_hook_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($hook) (line 54)
    // Case 'curl.before_send' == false (line 55)

    $actual = $this->wP_HTTP_Requests_Hooks->dispatch($hook, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testDispatch1()
{
    $hook = m::mock('UntypedParameter_hook_');
    $parameters = m::mock('UntypedParameter_parameters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // switch ($hook) (line 54)
    // Case 'curl.before_send' == true (line 55)

    $actual = $this->wP_HTTP_Requests_Hooks->dispatch($hook, $parameters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
