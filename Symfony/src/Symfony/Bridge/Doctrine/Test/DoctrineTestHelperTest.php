<?php

namespace tests\Symfony\Bridge\Doctrine\Test;

use Mockery as m;
use Symfony\Bridge\Doctrine\Test\DoctrineTestHelper;

class DoctrineTestHelperTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Symfony\Bridge\Doctrine\Test\DoctrineTestHelper
*/
protected $doctrineTestHelper;

public function setUp()
{
    parent::setUp();

    $this->doctrineTestHelper = new \Symfony\Bridge\Doctrine\Test\DoctrineTestHelper();
}

public function testCreateTestEntityManager0()
{
    $config = m::mock(\Doctrine\ORM\Configuration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!extension_loaded('pdo_sqlite')) == false (line 37)
    // if (null === $config) == false (line 41)

    $actual = $this->doctrineTestHelper->createTestEntityManager($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateTestEntityManager1()
{
    $config = m::mock(\Doctrine\ORM\Configuration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!extension_loaded('pdo_sqlite')) == false (line 37)
    // if (null === $config) == true (line 41)

    $actual = $this->doctrineTestHelper->createTestEntityManager($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateTestEntityManager2()
{
    $config = m::mock(\Doctrine\ORM\Configuration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!extension_loaded('pdo_sqlite')) == true (line 37)
    // if (null === $config) == false (line 41)

    $actual = $this->doctrineTestHelper->createTestEntityManager($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateTestEntityManager3()
{
    $config = m::mock(\Doctrine\ORM\Configuration::class);

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (!extension_loaded('pdo_sqlite')) == true (line 37)
    // if (null === $config) == true (line 41)

    $actual = $this->doctrineTestHelper->createTestEntityManager($config);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testCreateTestConfiguration0()
{
    // TODO: Your mock expectations here

    $actual = $this->doctrineTestHelper->createTestConfiguration();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
