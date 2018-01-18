<?php

namespace tests\PhpUnitCoverageTest;

use Mockery as m;
use PhpUnitCoverageTest\FooCov;

class FooCovTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \PhpUnitCoverageTest\FooCov
*/
protected $fooCov;

public function setUp()
{
    parent::setUp();

    $this->fooCov = new \PhpUnitCoverageTest\FooCov();
}

public function testFooZ0()
{
    // TODO: Your mock expectations here

    $actual = $this->fooCov->fooZ();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
