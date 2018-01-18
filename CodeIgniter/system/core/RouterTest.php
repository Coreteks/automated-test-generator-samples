<?php

namespace tests;

use CI_Router;
use Mockery as m;

class CI_RouterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_routing = null;
/**
* @var \CI_Router
*/
protected $cI_Router;

public function setUp()
{
    parent::setUp();

    $this->_routing = null;
    $this->cI_Router = new \CI_Router($this->_routing);
}

public function testSet_class0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Router->set_class($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_method0()
{
    $method = m::mock('UntypedParameter_method_');

    // TODO: Your mock expectations here

    $actual = $this->cI_Router->set_method($method);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_directory0()
{
    $dir = m::mock('UntypedParameter_dir_');
    $append = m::mock('UntypedParameter_append_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($append !== \TRUE or empty($this->directory)) == false (line 463)

    $actual = $this->cI_Router->set_directory($dir, $append);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testSet_directory1()
{
    $dir = m::mock('UntypedParameter_dir_');
    $append = m::mock('UntypedParameter_append_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($append !== \TRUE or empty($this->directory)) == true (line 463)

    $actual = $this->cI_Router->set_directory($dir, $append);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
