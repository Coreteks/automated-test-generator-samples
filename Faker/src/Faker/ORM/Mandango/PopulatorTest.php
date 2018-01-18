<?php

namespace tests\Faker\ORM\Mandango;

use Faker\Generator;
use Faker\ORM\Mandango\Populator;
use Mandango\Mandango;
use Mockery as m;

class PopulatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_generator;
/**
* @var \Mockery\MockInterface
*/
protected $_mandango;
/**
* @var \Faker\ORM\Mandango\Populator
*/
protected $populator;

public function setUp()
{
    parent::setUp();

    $this->_generator = m::mock(\Faker\Generator::class);
    $this->_mandango = m::mock(\Mandango\Mandango::class);
    $this->populator = new \Faker\ORM\Mandango\Populator($this->_generator, $this->_mandango);
}

public function testAddEntity0()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Mandango\EntityPopulator) == false (line 36)
    // if ($customColumnFormatters) == false (line 40)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity1()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Mandango\EntityPopulator) == false (line 36)
    // if ($customColumnFormatters) == true (line 40)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity2()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Mandango\EntityPopulator) == true (line 36)
    // if ($customColumnFormatters) == false (line 40)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testAddEntity3()
{
    $entity = m::mock('UntypedParameter_entity_');
    $number = m::mock('UntypedParameter_number_');
    $customColumnFormatters = m::mock('UntypedParameter_customColumnFormatters_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$entity instanceof \Faker\ORM\Mandango\EntityPopulator) == true (line 36)
    // if ($customColumnFormatters) == true (line 40)

    $actual = $this->populator->addEntity($entity, $number, $customColumnFormatters);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute0()
{
    // TODO: Your mock expectations here

    $actual = $this->populator->execute();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute1()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == false (line 57)

    $actual = $this->populator->execute();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testExecute2()
{
    // TODO: Your mock expectations here

    // Traversed conditions
    // for (...) == true (line 57)
    // for (...) == false (line 57)

    $actual = $this->populator->execute();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
