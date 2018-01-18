<?php

namespace tests\Psy\ExecutionLoop;

use Mockery as m;
use Psy\Configuration;
use Psy\ExecutionLoop\Loop;

class LoopTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_config;
/**
* @var \Psy\ExecutionLoop\Loop
*/
protected $loop;

public function setUp()
{
    parent::setUp();

    $this->_config = m::mock(\Psy\Configuration::class);
    $this->loop = new \Psy\ExecutionLoop\Loop($this->_config);
}

public function testRun0()
{
    $shell = m::mock(\Psy\Shell::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::bindLoop()) == false (line 137)

    $actual = $this->loop->run($shell);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun1()
{
    $shell = m::mock(\Psy\Shell::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::bindLoop()) == true (line 137)
    // if (is_object($that)) == false (line 139)

    $actual = $this->loop->run($shell);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testRun2()
{
    $shell = m::mock(\Psy\Shell::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (self::bindLoop()) == true (line 137)
    // if (is_object($that)) == true (line 139)

    $actual = $this->loop->run($shell);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testBeforeLoop0()
{
    // TODO: Your mock expectations here

    $actual = $this->loop->beforeLoop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAfterLoop0()
{
    // TODO: Your mock expectations here

    $actual = $this->loop->afterLoop();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
