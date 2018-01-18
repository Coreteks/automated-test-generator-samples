<?php

namespace tests;

use Mockery as m;
use WP_Roles;

class WP_RolesTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_site_id = null;
/**
* @var \WP_Roles
*/
protected $wP_Roles;

public function setUp()
{
    parent::setUp();

    $this->_site_id = null;
    $this->wP_Roles = new \WP_Roles($this->_site_id);
}

public function test__call0()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('_init' === $name) == false (line 103)

    $actual = $this->wP_Roles->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__call1()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('_init' === $name) == true (line 103)

    $actual = $this->wP_Roles->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReinit0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Roles->reinit();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_role0()
{
    $role = m::mock('UntypedParameter_role_');
    $display_name = m::mock('UntypedParameter_display_name_');
    $capabilities = m::mock('UntypedParameter_capabilities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($role) || isset($this->roles[$role])) == false (line 156)
    // if ($this->use_db) == false (line 164)

    $actual = $this->wP_Roles->add_role($role, $display_name, $capabilities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_role1()
{
    $role = m::mock('UntypedParameter_role_');
    $display_name = m::mock('UntypedParameter_display_name_');
    $capabilities = m::mock('UntypedParameter_capabilities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($role) || isset($this->roles[$role])) == false (line 156)
    // if ($this->use_db) == true (line 164)

    $actual = $this->wP_Roles->add_role($role, $display_name, $capabilities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_role2()
{
    $role = m::mock('UntypedParameter_role_');
    $display_name = m::mock('UntypedParameter_display_name_');
    $capabilities = m::mock('UntypedParameter_capabilities_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($role) || isset($this->roles[$role])) == true (line 156)

    $actual = $this->wP_Roles->add_role($role, $display_name, $capabilities);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_role0()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->role_objects[$role])) == false (line 180)
    // if ($this->use_db) == false (line 188)
    // if (\get_option('default_role') == $role) == false (line 192)

    $actual = $this->wP_Roles->remove_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_role1()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->role_objects[$role])) == false (line 180)
    // if ($this->use_db) == false (line 188)
    // if (\get_option('default_role') == $role) == true (line 192)

    $actual = $this->wP_Roles->remove_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_role2()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->role_objects[$role])) == false (line 180)
    // if ($this->use_db) == true (line 188)
    // if (\get_option('default_role') == $role) == false (line 192)

    $actual = $this->wP_Roles->remove_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_role3()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->role_objects[$role])) == false (line 180)
    // if ($this->use_db) == true (line 188)
    // if (\get_option('default_role') == $role) == true (line 192)

    $actual = $this->wP_Roles->remove_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_role4()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->role_objects[$role])) == true (line 180)

    $actual = $this->wP_Roles->remove_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_cap0()
{
    $role = m::mock('UntypedParameter_role_');
    $cap = m::mock('UntypedParameter_cap_');
    $grant = m::mock('UntypedParameter_grant_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->roles[$role])) == false (line 207)
    // if ($this->use_db) == false (line 212)

    $actual = $this->wP_Roles->add_cap($role, $cap, $grant);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_cap1()
{
    $role = m::mock('UntypedParameter_role_');
    $cap = m::mock('UntypedParameter_cap_');
    $grant = m::mock('UntypedParameter_grant_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->roles[$role])) == false (line 207)
    // if ($this->use_db) == true (line 212)

    $actual = $this->wP_Roles->add_cap($role, $cap, $grant);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_cap2()
{
    $role = m::mock('UntypedParameter_role_');
    $cap = m::mock('UntypedParameter_cap_');
    $grant = m::mock('UntypedParameter_grant_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->roles[$role])) == true (line 207)

    $actual = $this->wP_Roles->add_cap($role, $cap, $grant);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_cap0()
{
    $role = m::mock('UntypedParameter_role_');
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->roles[$role])) == false (line 226)
    // if ($this->use_db) == false (line 231)

    $actual = $this->wP_Roles->remove_cap($role, $cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_cap1()
{
    $role = m::mock('UntypedParameter_role_');
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->roles[$role])) == false (line 226)
    // if ($this->use_db) == true (line 231)

    $actual = $this->wP_Roles->remove_cap($role, $cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRemove_cap2()
{
    $role = m::mock('UntypedParameter_role_');
    $cap = m::mock('UntypedParameter_cap_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!isset($this->roles[$role])) == true (line 226)

    $actual = $this->wP_Roles->remove_cap($role, $cap);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role0()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->role_objects[$role])) == false (line 245)

    $actual = $this->wP_Roles->get_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_role1()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (isset($this->role_objects[$role])) == true (line 245)

    $actual = $this->wP_Roles->get_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_names0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Roles->get_names();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIs_role0()
{
    $role = m::mock('UntypedParameter_role_');

    // TODO: Your mock expectations here

    $actual = $this->wP_Roles->is_role($role);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit_roles0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->roles)) == false (line 281)

    $actual = $this->wP_Roles->init_roles();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit_roles1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->roles)) == false (line 281)

    $actual = $this->wP_Roles->init_roles();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testInit_roles2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($this->roles)) == true (line 281)

    $actual = $this->wP_Roles->init_roles();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFor_site0()
{
    $site_id = m::mock('UntypedParameter_site_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($site_id)) == false (line 314)
    // if (!empty($this->roles) && !$this->use_db) == false (line 322)

    $actual = $this->wP_Roles->for_site($site_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFor_site1()
{
    $site_id = m::mock('UntypedParameter_site_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($site_id)) == false (line 314)
    // if (!empty($this->roles) && !$this->use_db) == true (line 322)

    $actual = $this->wP_Roles->for_site($site_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFor_site2()
{
    $site_id = m::mock('UntypedParameter_site_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($site_id)) == true (line 314)
    // if (!empty($this->roles) && !$this->use_db) == false (line 322)

    $actual = $this->wP_Roles->for_site($site_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testFor_site3()
{
    $site_id = m::mock('UntypedParameter_site_id_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!empty($site_id)) == true (line 314)
    // if (!empty($this->roles) && !$this->use_db) == true (line 322)

    $actual = $this->wP_Roles->for_site($site_id);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGet_site_id0()
{
    // TODO: Your mock expectations here

    $actual = $this->wP_Roles->get_site_id();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
