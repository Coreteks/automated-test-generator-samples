<?php

namespace tests\PhpUnitCoverageTest;

use Mockery as m;
use PhpUnitCoverageTest\BarCov;
use PhpUnitCoverageTest\FooCov;

class BarCovTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_foo;
/**
* @var \PhpUnitCoverageTest\BarCov
*/
protected $barCov;

public function setUp()
{
    parent::setUp();

    $this->_foo = m::mock(\PhpUnitCoverageTest\FooCov::class);
    $this->barCov = new \PhpUnitCoverageTest\BarCov($this->_foo);
}

public function testBarZ0()
{
    // TODO: Your mock expectations here

    $actual = $this->barCov->barZ();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
