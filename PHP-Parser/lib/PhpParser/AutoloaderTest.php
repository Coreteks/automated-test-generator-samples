<?php

namespace tests\PhpParser;

use Mockery as m;
use PhpParser\Autoloader;

class AutoloaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpParser\Autoloader
*/
protected $autoloader;

public function setUp()
{
    parent::setUp();

    $this->autoloader = new \PhpParser\Autoloader();
}

public function testRegister0()
{
    $prepend = m::mock('UntypedParameter_prepend_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::$registered === true) == false (line 19)

    $actual = $this->autoloader->register($prepend);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRegister1()
{
    $prepend = m::mock('UntypedParameter_prepend_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::$registered === true) == true (line 19)

    $actual = $this->autoloader->register($prepend);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAutoload0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === strpos($class, 'PhpParser\\')) == false (line 33)

    $actual = $this->autoloader->autoload($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAutoload1()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === strpos($class, 'PhpParser\\')) == true (line 33)
    // if (file_exists($fileName)) == false (line 35)

    $actual = $this->autoloader->autoload($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAutoload2()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 === strpos($class, 'PhpParser\\')) == true (line 33)
    // if (file_exists($fileName)) == true (line 35)

    $actual = $this->autoloader->autoload($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
