<?php

namespace tests\Illuminate\Console;

use Illuminate\Console\OutputStyle;
use Mockery as m;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OutputStyleTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_input;
/**
* @var \Mockery\MockInterface
*/
protected $_output;
/**
* @var \Illuminate\Console\OutputStyle
*/
protected $outputStyle;

public function setUp()
{
    parent::setUp();

    $this->_input = m::mock(\Symfony\Component\Console\Input\InputInterface::class);
    $this->_output = m::mock(\Symfony\Component\Console\Output\OutputInterface::class);
    $this->outputStyle = new \Illuminate\Console\OutputStyle($this->_input, $this->_output);
}

public function testIsQuiet0()
{
    // TODO: Your mock expectations here

    $actual = $this->outputStyle->isQuiet();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsVerbose0()
{
    // TODO: Your mock expectations here

    $actual = $this->outputStyle->isVerbose();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsVeryVerbose0()
{
    // TODO: Your mock expectations here

    $actual = $this->outputStyle->isVeryVerbose();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsDebug0()
{
    // TODO: Your mock expectations here

    $actual = $this->outputStyle->isDebug();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
