<?php

namespace tests;

use Mockery as m;
use _WP_Dependency;

class _WP_DependencyTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \_WP_Dependency
*/
protected $_WP_Dependency;

public function setUp()
{
    parent::setUp();

    $this->_WP_Dependency = new \_WP_Dependency();
}

public function testAdd_data0()
{
    $name = m::mock('UntypedParameter_name_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_scalar($name)) == false (line 92)

    $actual = $this->_WP_Dependency->add_data($name, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAdd_data1()
{
    $name = m::mock('UntypedParameter_name_');
    $data = m::mock('UntypedParameter_data_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!\is_scalar($name)) == true (line 92)

    $actual = $this->_WP_Dependency->add_data($name, $data);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
