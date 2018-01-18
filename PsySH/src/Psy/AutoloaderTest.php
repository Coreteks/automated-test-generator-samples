<?php

namespace tests\Psy;

use Mockery as m;
use Psy\Autoloader;

class AutoloaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Psy\Autoloader
*/
protected $autoloader;

public function setUp()
{
    parent::setUp();

    $this->autoloader = new \Psy\Autoloader();
}

public function testRegister0()
{
    // TODO: Your mock expectations here

    $actual = $this->autoloader->register();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAutoload0()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 !== strpos($class, 'Psy')) == false (line 36)
    // if (is_file($file)) == false (line 41)

    $actual = $this->autoloader->autoload($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAutoload1()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 !== strpos($class, 'Psy')) == false (line 36)
    // if (is_file($file)) == true (line 41)

    $actual = $this->autoloader->autoload($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAutoload2()
{
    $class = m::mock('UntypedParameter_class_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (0 !== strpos($class, 'Psy')) == true (line 36)

    $actual = $this->autoloader->autoload($class);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
