<?php

namespace tests\Symfony\Bridge\Doctrine\Validator\Constraints;

use Mockery as m;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

class UniqueEntityTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity
*/
protected $uniqueEntity;

public function setUp()
{
    parent::setUp();

    $this->uniqueEntity = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity();
}

public function testGetRequiredOptions0()
{
    // TODO: Your mock expectations here

    $actual = $this->uniqueEntity->getRequiredOptions();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidatedBy0()
{
    // TODO: Your mock expectations here

    $actual = $this->uniqueEntity->validatedBy();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetTargets0()
{
    // TODO: Your mock expectations here

    $actual = $this->uniqueEntity->getTargets();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetDefaultOption0()
{
    // TODO: Your mock expectations here

    $actual = $this->uniqueEntity->getDefaultOption();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
