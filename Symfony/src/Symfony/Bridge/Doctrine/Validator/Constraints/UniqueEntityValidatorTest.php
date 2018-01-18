<?php

namespace tests\Symfony\Bridge\Doctrine\Validator\Constraints;

use Doctrine\Common\Persistence\ManagerRegistry;
use Mockery as m;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator;

class UniqueEntityValidatorTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_registry;
/**
* @var \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
*/
protected $uniqueEntityValidator;

public function setUp()
{
    parent::setUp();

    $this->_registry = m::mock(\Doctrine\Common\Persistence\ManagerRegistry::class);
    $this->uniqueEntityValidator = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->_registry);
}

public function testValidate0()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate1()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate2()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate3()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate4()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate5()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate6()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate7()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate8()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate9()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate10()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate11()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate12()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate13()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate14()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate15()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate16()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate17()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate18()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate19()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate20()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate21()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate22()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate23()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate24()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate25()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate26()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate27()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate28()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate29()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate30()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate31()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate32()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate33()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate34()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate35()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate36()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate37()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate38()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate39()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate40()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate41()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate42()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate43()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate44()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate45()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate46()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate47()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate48()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate49()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate50()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate51()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate52()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate53()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate54()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate55()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate56()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate57()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate58()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate59()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate60()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate61()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate62()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate63()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate64()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate65()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate66()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate67()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate68()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate69()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate70()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate71()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate72()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate73()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate74()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate75()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate76()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate77()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate78()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate79()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate80()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate81()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate82()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate83()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate84()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate85()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate86()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate87()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate88()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate89()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate90()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate91()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate92()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate93()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate94()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate95()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate96()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate97()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate98()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate99()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate100()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate101()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate102()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate103()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate104()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate105()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate106()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate107()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate108()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate109()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate110()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate111()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate112()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate113()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate114()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate115()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate116()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate117()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate118()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate119()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate120()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate121()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate122()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate123()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate124()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate125()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate126()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate127()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate128()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate129()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate130()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate131()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate132()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate133()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate134()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate135()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate136()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate137()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate138()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate139()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate140()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate141()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate142()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate143()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate144()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate145()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate146()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate147()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate148()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate149()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate150()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate151()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate152()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate153()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate154()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate155()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate156()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate157()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate158()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate159()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate160()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate161()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate162()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate163()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate164()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate165()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate166()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate167()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate168()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate169()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate170()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate171()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate172()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate173()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate174()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate175()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate176()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate177()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate178()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate179()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate180()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate181()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate182()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate183()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate184()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate185()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate186()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate187()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate188()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate189()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == false (line 76)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == true (line 88)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The field "%s" is not mapped by Doctrine, so it cannot be validated for uniqueness.', $fieldName)) -> exception (line 89)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate190()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == false (line 67)
    // if (!$em) == true (line 76)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('Unable to find the object manager associated with an entity of class "%s".', get_class($entity))) -> exception (line 77)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate191()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate192()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate193()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate194()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate195()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate196()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate197()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate198()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate199()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate200()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate201()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate202()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate203()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate204()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate205()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate206()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate207()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate208()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate209()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate210()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate211()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate212()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate213()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate214()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate215()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate216()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate217()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate218()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate219()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate220()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate221()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate222()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate223()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate224()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate225()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate226()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate227()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate228()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate229()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate230()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate231()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate232()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate233()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate234()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate235()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate236()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate237()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate238()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate239()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate240()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate241()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate242()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate243()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate244()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate245()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate246()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate247()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate248()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate249()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate250()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate251()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate252()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate253()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate254()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate255()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate256()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate257()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate258()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate259()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate260()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate261()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate262()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate263()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate264()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate265()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate266()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate267()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate268()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate269()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate270()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate271()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate272()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate273()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate274()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate275()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate276()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate277()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate278()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate279()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate280()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate281()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate282()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate283()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate284()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate285()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate286()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate287()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate288()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate289()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate290()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate291()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate292()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate293()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate294()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate295()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate296()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate297()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate298()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == false (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate299()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate300()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate301()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate302()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate303()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate304()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate305()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate306()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate307()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate308()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate309()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate310()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate311()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate312()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate313()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate314()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate315()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate316()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate317()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate318()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate319()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate320()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate321()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate322()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate323()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate324()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate325()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == false (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate326()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate327()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate328()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate329()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate330()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate331()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate332()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate333()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate334()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate335()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate336()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate337()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate338()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate339()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate340()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate341()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate342()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate343()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate344()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate345()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate346()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate347()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate348()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate349()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate350()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate351()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate352()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == false (line 98)
    // if (null !== $criteria[$fieldName] && $class->hasAssociation($fieldName)) == true (line 104)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate353()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate354()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate355()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate356()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate357()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate358()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate359()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate360()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate361()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate362()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate363()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate364()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == false (line 124)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate365()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate366()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate367()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate368()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate369()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate370()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == false (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate371()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate372()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == false (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate373()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate374()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == false (line 149)
    // if (is_array($result)) == true (line 151)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate375()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == false (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate376()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == false (line 132)
    // if ($result instanceof \IteratorAggregate) == true (line 141)
    // if ($result instanceof \Iterator) == true (line 149)
    // if (0 === count($result) || 1 === count($result) && $entity === ($result instanceof \Iterator ? $result->current() : current($result))) == true (line 159)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate377()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == false (line 120)
    // if (null !== $constraint->entityClass) == true (line 124)
    // if (!$entity instanceof $supportedClass) == true (line 132)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The "%s" entity repository does not support the "%s" entity. The entity should be an instance of or extend "%s".', $constraint->entityClass, $class->getName(), $supportedClass)) -> exception (line 133)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate378()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == false (line 114)
    // if (empty($criteria)) == true (line 120)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate379()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == false (line 88)
    // if (null === $fieldValue) == true (line 94)
    // if ($constraint->ignoreNull && null === $fieldValue) == true (line 98)
    // if ($hasNullValue && $constraint->ignoreNull) == true (line 114)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate380()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == false (line 70)
    // if (!$class->hasField($fieldName) && !$class->hasAssociation($fieldName)) == true (line 88)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('The field "%s" is not mapped by Doctrine, so it cannot be validated for uniqueness.', $fieldName)) -> exception (line 89)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate381()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == false (line 63)
    // if ($constraint->em) == true (line 67)
    // if (!$em) == true (line 70)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException(sprintf('Object manager "%s" does not exist.', $constraint->em)) -> exception (line 71)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testValidate382()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == false (line 59)
    // if (null === $entity) == true (line 63)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\ConstraintDefinitionException
 */
public function testValidate383()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == false (line 53)
    // if (0 === count($fields)) == true (line 59)
    // throw new \Symfony\Component\Validator\Exception\ConstraintDefinitionException('At least one field has to be specified.') -> exception (line 60)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\UnexpectedTypeException
 */
public function testValidate384()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == false (line 49)
    // if (null !== $constraint->errorPath && !is_string($constraint->errorPath)) == true (line 53)
    // throw new \Symfony\Component\Validator\Exception\UnexpectedTypeException($constraint->errorPath, 'string or null') -> exception (line 54)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\UnexpectedTypeException
 */
public function testValidate385()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == false (line 45)
    // if (!is_array($constraint->fields) && !is_string($constraint->fields)) == true (line 49)
    // throw new \Symfony\Component\Validator\Exception\UnexpectedTypeException($constraint->fields, 'array') -> exception (line 50)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

/**
 * @expectedException \Symfony\Component\Validator\Exception\UnexpectedTypeException
 */
public function testValidate386()
{
    $entity = m::mock('UntypedParameter_entity_');
    $constraint = m::mock(\Symfony\Component\Validator\Constraint::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!$constraint instanceof \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity) == true (line 45)
    // throw new \Symfony\Component\Validator\Exception\UnexpectedTypeException($constraint, __NAMESPACE__ . '\\UniqueEntity') -> exception (line 46)

    $actual = $this->uniqueEntityValidator->validate($entity, $constraint);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
