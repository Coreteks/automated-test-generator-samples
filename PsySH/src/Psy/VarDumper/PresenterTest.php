<?php

namespace tests\Psy\VarDumper;

use Mockery as m;
use Psy\VarDumper\Presenter;
use Symfony\Component\Console\Formatter\OutputFormatter;

class PresenterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_formatter;
/**
* @var mixed
*/
protected $_forceArrayIndexes = null;
/**
* @var \Psy\VarDumper\Presenter
*/
protected $presenter;

public function setUp()
{
    parent::setUp();

    $this->_formatter = m::mock(\Symfony\Component\Console\Formatter\OutputFormatter::class);
    $this->_forceArrayIndexes = null;
    $this->presenter = new \Psy\VarDumper\Presenter($this->_formatter, $this->_forceArrayIndexes);
}

public function testAddCasters0()
{
    $casters = [];

    // TODO: Your mock expectations here

    $actual = $this->presenter->addCasters($casters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPresentRef0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    $actual = $this->presenter->presentRef($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPresent0()
{
    $value = m::mock('UntypedParameter_value_');
    $depth = m::mock('UntypedParameter_depth_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $depth) == false (line 114)

    $actual = $this->presenter->present($value, $depth, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testPresent1()
{
    $value = m::mock('UntypedParameter_value_');
    $depth = m::mock('UntypedParameter_depth_');
    $options = m::mock('UntypedParameter_options_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null !== $depth) == true (line 114)

    $actual = $this->presenter->present($value, $depth, $options);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
