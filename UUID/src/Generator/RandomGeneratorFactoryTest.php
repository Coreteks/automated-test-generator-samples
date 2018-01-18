<?php

namespace tests\Ramsey\Uuid\Generator;

use Mockery as m;
use Ramsey\Uuid\Generator\RandomGeneratorFactory;

class RandomGeneratorFactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Ramsey\Uuid\Generator\RandomGeneratorFactory
*/
protected $randomGeneratorFactory;

public function setUp()
{
    parent::setUp();

    $this->randomGeneratorFactory = new \Ramsey\Uuid\Generator\RandomGeneratorFactory();
}

public function testGetGenerator0()
{
    // TODO: Your mock expectations here

    $actual = $this->randomGeneratorFactory->getGenerator();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
