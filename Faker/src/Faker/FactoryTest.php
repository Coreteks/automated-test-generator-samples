<?php

namespace tests\Faker;

use Faker\Factory;
use Mockery as m;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Faker\Factory
*/
protected $factory;

public function setUp()
{
    parent::setUp();

    $this->factory = new \Faker\Factory();
}

public function testCreate0()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    $actual = $this->factory->create($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreate1()
{
    $locale = m::mock('UntypedParameter_locale_');

    // TODO: Your mock expectations here

    $actual = $this->factory->create($locale);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
