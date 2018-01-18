<?php

namespace tests\Symfony\Bridge\Doctrine\Form\ChoiceList;

use Doctrine\ORM\QueryBuilder;
use Mockery as m;
use Symfony\Bridge\Doctrine\Form\ChoiceList\ORMQueryBuilderLoader;

class ORMQueryBuilderLoaderTest extends \PHPUnit_Framework_TestCase
{
/**
* @var \Mockery\MockInterface
*/
protected $_queryBuilder;
/**
* @var \Symfony\Bridge\Doctrine\Form\ChoiceList\ORMQueryBuilderLoader
*/
protected $oRMQueryBuilderLoader;

public function setUp()
{
    parent::setUp();

    $this->_queryBuilder = m::mock(\Doctrine\ORM\QueryBuilder::class);
    $this->oRMQueryBuilderLoader = new \Symfony\Bridge\Doctrine\Form\ChoiceList\ORMQueryBuilderLoader($this->_queryBuilder);
}

public function testGetEntities0()
{
    // TODO: Your mock expectations here

    $actual = $this->oRMQueryBuilderLoader->getEntities();
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEntitiesByIds0()
{
    $identifier = m::mock('UntypedParameter_identifier_');
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($metadata->getTypeOfField($identifier), array('integer', 'bigint', 'smallint'))) == false (line 67)
    // if (in_array($metadata->getTypeOfField($identifier), array('uuid', 'guid'))) == false (line 75)
    // if (!$values) == false (line 85)

    $actual = $this->oRMQueryBuilderLoader->getEntitiesByIds($identifier, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEntitiesByIds1()
{
    $identifier = m::mock('UntypedParameter_identifier_');
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($metadata->getTypeOfField($identifier), array('integer', 'bigint', 'smallint'))) == false (line 67)
    // if (in_array($metadata->getTypeOfField($identifier), array('uuid', 'guid'))) == false (line 75)
    // if (!$values) == true (line 85)

    $actual = $this->oRMQueryBuilderLoader->getEntitiesByIds($identifier, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEntitiesByIds2()
{
    $identifier = m::mock('UntypedParameter_identifier_');
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($metadata->getTypeOfField($identifier), array('integer', 'bigint', 'smallint'))) == false (line 67)
    // if (in_array($metadata->getTypeOfField($identifier), array('uuid', 'guid'))) == true (line 75)
    // if (!$values) == false (line 85)

    $actual = $this->oRMQueryBuilderLoader->getEntitiesByIds($identifier, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEntitiesByIds3()
{
    $identifier = m::mock('UntypedParameter_identifier_');
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($metadata->getTypeOfField($identifier), array('integer', 'bigint', 'smallint'))) == false (line 67)
    // if (in_array($metadata->getTypeOfField($identifier), array('uuid', 'guid'))) == true (line 75)
    // if (!$values) == true (line 85)

    $actual = $this->oRMQueryBuilderLoader->getEntitiesByIds($identifier, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEntitiesByIds4()
{
    $identifier = m::mock('UntypedParameter_identifier_');
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($metadata->getTypeOfField($identifier), array('integer', 'bigint', 'smallint'))) == true (line 67)
    // if (!$values) == false (line 85)

    $actual = $this->oRMQueryBuilderLoader->getEntitiesByIds($identifier, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}

public function testGetEntitiesByIds5()
{
    $identifier = m::mock('UntypedParameter_identifier_');
    $values = [];

    // TODO: Your mock expectations here

    // Traversed conditions
    // if (in_array($metadata->getTypeOfField($identifier), array('integer', 'bigint', 'smallint'))) == true (line 67)
    // if (!$values) == true (line 85)

    $actual = $this->oRMQueryBuilderLoader->getEntitiesByIds($identifier, $values);
    $expected = null; // TODO: Expected value here
    $this->assertEquals($expected, $actual);
}
}
