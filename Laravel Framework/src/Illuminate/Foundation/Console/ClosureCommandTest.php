<?php

namespace tests\Illuminate\Foundation\Console;

use Closure;
use Illuminate\Foundation\Console\ClosureCommand;
use Mockery as m;

class ClosureCommandTest extends \PHPUnit_Framework_TestCase
{
/**
* @var mixed
*/
protected $_signature = null;
/**
* @var \Mockery\MockInterface
*/
protected $_callback;
/**
* @var \Illuminate\Foundation\Console\ClosureCommand
*/
protected $closureCommand;

public function setUp()
{
    parent::setUp();

    $this->_signature = null;
    $this->_callback = m::mock(\Closure::class);
    $this->closureCommand = new \Illuminate\Foundation\Console\ClosureCommand($this->_signature, $this->_callback);
}

public function testDescribe0()
{
    $description = m::mock('UntypedParameter_description_');

    // TODO: Your mock expectations here

    $actual = $this->closureCommand->describe($description);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
