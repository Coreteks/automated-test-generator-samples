<?php

namespace tests;

use Mockery as m;
use WP_Role;

class WP_RoleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_role = null;
/**
* @var mixed
*/
protected $_capabilities = null;
/**
* @var \WP_Role
*/
protected $wP_Role;

public function setUp()
{
    parent::setUp();

    $this->_role = null;
    $this->_capabilities = null;
    $this->wP_Role = new \WP_Role($this->_role, $this->_capabilities);
}

public function testAdd_cap0()
{
    $cap = m::mock('UntypedParameter_cap_');
    $grant = m::mock('UntypedParameter_grant_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Role->add_cap($cap, $grant);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_cap0()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Role->remove_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_cap0()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($capabilities[$cap])) == false (line 103)

    $actual = $this->wP_Role->has_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testHas_cap1()
{
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($capabilities[$cap])) == true (line 103)

    $actual = $this->wP_Role->has_cap($cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
