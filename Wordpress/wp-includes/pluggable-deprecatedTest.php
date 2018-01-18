<?php

namespace tests;

use Mockery as m;
use wp_atom_server;

class wp_atom_serverTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \wp_atom_server
*/
protected $wp_atom_server;

public function setUp()
{
    parent::setUp();

    $this->wp_atom_server = new \wp_atom_server();
}

public function test__call0()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    $actual = $this->wp_atom_server->__call($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function test__callStatic0()
{
    $name = m::mock('UntypedParameter_name_');
    $arguments = m::mock('UntypedParameter_arguments_');

    // TODO: Your mock expectations here

    $actual = $this->wp_atom_server->__callStatic($name, $arguments);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
