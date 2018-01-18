<?php

namespace tests;

use Mockery as m;
use WP_Ajax_Response;

class WP_Ajax_ResponseTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_args = null;
/**
* @var \WP_Ajax_Response
*/
protected $wP_Ajax_Response;

public function setUp()
{
    parent::setUp();

    $this->_args = null;
    $this->wP_Ajax_Response = new \WP_Ajax_Response($this->_args);
}

public function testAdd0()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == false (line 91)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd1()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == false (line 91)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd2()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == false (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd3()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == false (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd4()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == false (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd5()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == false (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd6()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd7()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd8()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd9()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd10()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd11()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd12()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd13()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd14()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd15()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd16()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd17()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd18()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd19()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd20()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd21()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd22()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd23()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd24()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd25()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd26()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd27()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd28()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd29()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd30()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd31()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd32()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd33()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd34()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd35()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd36()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd37()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd38()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd39()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd40()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd41()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd42()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd43()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd44()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd45()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd46()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd47()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd48()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd49()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd50()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd51()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd52()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd53()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd54()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd55()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd56()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd57()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd58()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd59()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd60()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == true (line 94)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd61()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == true (line 94)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd62()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == true (line 94)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd63()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == true (line 94)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd64()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == true (line 94)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd65()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == false (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == true (line 94)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd66()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == false (line 91)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd67()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == false (line 91)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd68()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == false (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd69()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == false (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd70()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == false (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd71()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == false (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd72()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd73()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd74()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd75()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd76()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd77()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd78()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd79()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd80()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd81()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd82()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd83()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd84()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd85()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd86()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd87()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd88()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd89()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd90()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd91()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd92()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd93()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd94()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd95()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd96()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd97()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd98()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd99()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd100()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd101()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == false (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd102()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd103()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd104()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd105()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd106()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd107()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == false (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd108()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd109()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd110()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd111()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd112()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd113()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd114()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd115()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd116()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd117()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd118()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd119()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == false (line 105)
    // if (\is_array($error_data)) == true (line 107)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd120()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd121()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd122()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd123()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd124()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd125()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == false (line 94)
    // if (\is_object($error_data)) == true (line 98)
    // if (\is_scalar($error_data)) == true (line 105)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd126()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == true (line 94)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd127()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == true (line 94)
    // if (\is_array($r['supplemental'])) == false (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd128()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == true (line 94)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd129()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == true (line 94)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd130()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == true (line 94)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == false (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd131()
{
    $args = m::mock('UntypedParameter_args_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\is_wp_error($id)) == true (line 85)
    // if (\is_wp_error($data)) == true (line 91)
    // if (!($error_data = $data->get_error_data($code))) == true (line 94)
    // if (\is_array($r['supplemental'])) == true (line 120)
    // if (\false === $action) == true (line 127)

    $actual = $this->wP_Ajax_Response->add($args);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend0()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_doing_ajax()) == false (line 156)

    $actual = $this->wP_Ajax_Response->send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_doing_ajax()) == true (line 156)

    $actual = $this->wP_Ajax_Response->send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_doing_ajax()) == false (line 156)

    $actual = $this->wP_Ajax_Response->send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSend3()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // if (\wp_doing_ajax()) == true (line 156)

    $actual = $this->wP_Ajax_Response->send();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
