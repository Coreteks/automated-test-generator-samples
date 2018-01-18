<?php

namespace tests\Symfony\Bridge\Doctrine\Form\ChoiceList;

use Doctrine\Common\Persistence\ObjectManager;
use Mockery as m;
use Symfony\Bridge\Doctrine\Form\ChoiceList\DoctrineChoiceLoader;
use Symfony\Bridge\Doctrine\Form\ChoiceList\EntityLoaderInterface;
use Symfony\Bridge\Doctrine\Form\ChoiceList\IdReader;

class DoctrineChoiceLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_manager;
/**
* @var mixed
*/
protected $_class = null;
/**
* @var \Mockery\MockInterface
*/
protected $_idReader;
/**
* @var \Mockery\MockInterface
*/
protected $_objectLoader;
/**
* @var \Symfony\Bridge\Doctrine\Form\ChoiceList\DoctrineChoiceLoader
*/
protected $doctrineChoiceLoader;

public function setUp()
{
    parent::setUp();

    $this->_manager = m::mock(\Doctrine\Common\Persistence\ObjectManager::class);
    $this->_class = null;
    $this->_idReader = m::mock(\Symfony\Bridge\Doctrine\Form\ChoiceList\IdReader::class);
    $this->_objectLoader = m::mock(\Symfony\Bridge\Doctrine\Form\ChoiceList\EntityLoaderInterface::class);
    $this->doctrineChoiceLoader = new \Symfony\Bridge\Doctrine\Form\ChoiceList\DoctrineChoiceLoader($this->_manager, $this->_class, $this->_idReader, $this->_objectLoader);
}

public function testLoadChoiceList0()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->choiceList) == false (line 63)

    $actual = $this->doctrineChoiceLoader->loadChoiceList($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadChoiceList1()
{
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ($this->choiceList) == true (line 63)

    $actual = $this->doctrineChoiceLoader->loadChoiceList($value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadValuesForChoices0()
{
    $choices = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($choices)) == false (line 80)
    // if ($optimize && !$this->choiceList && $this->idReader->isSingleId()) == false (line 89)

    $actual = $this->doctrineChoiceLoader->loadValuesForChoices($choices, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadValuesForChoices1()
{
    $choices = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($choices)) == false (line 80)
    // if ($optimize && !$this->choiceList && $this->idReader->isSingleId()) == true (line 89)

    $actual = $this->doctrineChoiceLoader->loadValuesForChoices($choices, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadValuesForChoices2()
{
    $choices = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($choices)) == false (line 80)
    // if ($optimize && !$this->choiceList && $this->idReader->isSingleId()) == true (line 89)
    // if ($object instanceof $this->class) == false (line 94)

    $actual = $this->doctrineChoiceLoader->loadValuesForChoices($choices, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadValuesForChoices3()
{
    $choices = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($choices)) == false (line 80)
    // if ($optimize && !$this->choiceList && $this->idReader->isSingleId()) == true (line 89)
    // if ($object instanceof $this->class) == true (line 94)

    $actual = $this->doctrineChoiceLoader->loadValuesForChoices($choices, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadValuesForChoices4()
{
    $choices = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($choices)) == true (line 80)

    $actual = $this->doctrineChoiceLoader->loadValuesForChoices($choices, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadChoicesForValues0()
{
    $values = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($values)) == false (line 117)
    // if ($optimize && !$this->choiceList && $this->objectLoader && $this->idReader->isSingleId()) == false (line 125)

    $actual = $this->doctrineChoiceLoader->loadChoicesForValues($values, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadChoicesForValues1()
{
    $values = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($values)) == false (line 117)
    // if ($optimize && !$this->choiceList && $this->objectLoader && $this->idReader->isSingleId()) == true (line 125)

    $actual = $this->doctrineChoiceLoader->loadChoicesForValues($values, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadChoicesForValues2()
{
    $values = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($values)) == false (line 117)
    // if ($optimize && !$this->choiceList && $this->objectLoader && $this->idReader->isSingleId()) == true (line 125)
    // if (isset($objectsById[$id])) == false (line 139)

    $actual = $this->doctrineChoiceLoader->loadChoicesForValues($values, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadChoicesForValues3()
{
    $values = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($values)) == false (line 117)
    // if ($optimize && !$this->choiceList && $this->objectLoader && $this->idReader->isSingleId()) == true (line 125)
    // if (isset($objectsById[$id])) == true (line 139)

    $actual = $this->doctrineChoiceLoader->loadChoicesForValues($values, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadChoicesForValues4()
{
    $values = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($values)) == false (line 117)
    // if ($optimize && !$this->choiceList && $this->objectLoader && $this->idReader->isSingleId()) == true (line 125)

    $actual = $this->doctrineChoiceLoader->loadChoicesForValues($values, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadChoicesForValues5()
{
    $values = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($values)) == false (line 117)
    // if ($optimize && !$this->choiceList && $this->objectLoader && $this->idReader->isSingleId()) == true (line 125)
    // if (isset($objectsById[$id])) == false (line 139)

    $actual = $this->doctrineChoiceLoader->loadChoicesForValues($values, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadChoicesForValues6()
{
    $values = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($values)) == false (line 117)
    // if ($optimize && !$this->choiceList && $this->objectLoader && $this->idReader->isSingleId()) == true (line 125)
    // if (isset($objectsById[$id])) == true (line 139)

    $actual = $this->doctrineChoiceLoader->loadChoicesForValues($values, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testLoadChoicesForValues7()
{
    $values = [];
    $value = m::mock('UntypedParameter_value_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (empty($values)) == true (line 117)

    $actual = $this->doctrineChoiceLoader->loadChoicesForValues($values, $value);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
