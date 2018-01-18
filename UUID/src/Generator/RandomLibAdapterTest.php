<?php

namespace tests\Ramsey\Uuid\Generator;

use Mockery as m;
use Ramsey\Uuid\Generator\RandomLibAdapter;
use RandomLib\Generator;

class RandomLibAdapterTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Ramsey\Uuid\Generator\RandomLibAdapter
*/
protected $randomLibAdapter;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\RandomLib\Generator::class);
    $this->randomLibAdapter = new \Ramsey\Uuid\Generator\RandomLibAdapter($this->_generator);
}

public function testGenerate0()
{
    $length = m::mock('UntypedParameter_length_');

    // TODO: Your mock expectations here

    $actual = $this->randomLibAdapter->generate($length);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
