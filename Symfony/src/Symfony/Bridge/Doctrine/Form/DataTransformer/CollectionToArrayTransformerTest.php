<?php

namespace tests\Symfony\Bridge\Doctrine\Form\DataTransformer;

use Mockery as m;
use Symfony\Bridge\Doctrine\Form\DataTransformer\CollectionToArrayTransformer;

class CollectionToArrayTransformerTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Form\DataTransformer\CollectionToArrayTransformer
*/
protected $collectionToArrayTransformer;

public function setUp()
{
    parent::setUp();

    $this->collectionToArrayTransformer = new \Symfony\Bridge\Doctrine\Form\DataTransformer\CollectionToArrayTransformer();
}

public function testTransform0()
{
    $collection = m::mock('UntypedParameter_collection_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $collection) == false (line 33)
    // if (is_array($collection)) == false (line 39)
    // if (!$collection instanceof \Doctrine\Common\Collections\Collection) == false (line 43)

    $actual = $this->collectionToArrayTransformer->transform($collection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Form\Exception\TransformationFailedException
 */
public function testTransform1()
{
    $collection = m::mock('UntypedParameter_collection_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $collection) == false (line 33)
    // if (is_array($collection)) == false (line 39)
    // if (!$collection instanceof \Doctrine\Common\Collections\Collection) == true (line 43)
    // throw new \Symfony\Component\Form\Exception\TransformationFailedException('Expected a Doctrine\\Common\\Collections\\Collection object.') -> exception (line 44)

    $actual = $this->collectionToArrayTransformer->transform($collection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform2()
{
    $collection = m::mock('UntypedParameter_collection_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $collection) == false (line 33)
    // if (is_array($collection)) == true (line 39)

    $actual = $this->collectionToArrayTransformer->transform($collection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testTransform3()
{
    $collection = m::mock('UntypedParameter_collection_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (null === $collection) == true (line 33)

    $actual = $this->collectionToArrayTransformer->transform($collection);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReverseTransform0()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $array || null === $array) == false (line 59)

    $actual = $this->collectionToArrayTransformer->reverseTransform($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testReverseTransform1()
{
    $array = m::mock('UntypedParameter_array_');

    // TODO: Your mock expectations here

    // Traversed conditions
    // if ('' === $array || null === $array) == true (line 59)

    $actual = $this->collectionToArrayTransformer->reverseTransform($array);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
