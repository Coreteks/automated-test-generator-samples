<?php

namespace tests\Symfony\Bridge\Doctrine\Form\ChoiceList;

use Doctrine\Common\Persistence\Mapping\ClassMetadata;
use Doctrine\Common\Persistence\ObjectManager;
use Mockery as m;
use Symfony\Bridge\Doctrine\Form\ChoiceList\IdReader;

class IdReaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_om;
/**
* @var \Mockery\MockInterface
*/
protected $_classMetadata;
/**
* @var \Symfony\Bridge\Doctrine\Form\ChoiceList\IdReader
*/
protected $idReader;

public function setUp()
{
    parent::setUp();

    $this->_om = m::mock(\Doctrine\Common\Persistence\ObjectManager::class);
    $this->_classMetadata = m::mock(\Doctrine\Common\Persistence\Mapping\ClassMetadata::class);
    $this->idReader = new \Symfony\Bridge\Doctrine\Form\ChoiceList\IdReader($this->_om, $this->_classMetadata);
}

public function testIsSingleId0()
{
    // TODO: Your mock expectations here

    $actual = $this->idReader->isSingleId();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testIsIntId0()
{
    // TODO: Your mock expectations here

    $actual = $this->idReader->isIntId();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIdValue0()
{
    $object = m::mock('UntypedParameter_object_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$object) == false (line 93)
    // if (!$this->om->contains($object)) == false (line 97)
    // if ($this->associationIdReader) == false (line 108)

    $actual = $this->idReader->getIdValue($object);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIdValue1()
{
    $object = m::mock('UntypedParameter_object_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$object) == false (line 93)
    // if (!$this->om->contains($object)) == false (line 97)
    // if ($this->associationIdReader) == true (line 108)

    $actual = $this->idReader->getIdValue($object);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Form\Exception\RuntimeException
 */
public function testGetIdValue2()
{
    $object = m::mock('UntypedParameter_object_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$object) == false (line 93)
    // if (!$this->om->contains($object)) == true (line 97)
    // throw new \Symfony\Component\Form\Exception\RuntimeException('Entities passed to the choice field must be managed. Maybe ' . 'persist them in the entity manager?') -> exception (line 98)

    $actual = $this->idReader->getIdValue($object);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIdValue3()
{
    $object = m::mock('UntypedParameter_object_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$object) == true (line 93)

    $actual = $this->idReader->getIdValue($object);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetIdField0()
{
    // TODO: Your mock expectations here

    $actual = $this->idReader->getIdField();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
